-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2025 at 02:27 PM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `status`, `image`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The Benefits of Regular Full-Body Massage', 1, 'blogs/nA13TQobTQ18Y4nlhgWa2b0QIWAfU2ixgfK39J1h.jpg', 'the-benefits-of-regular', 'Discover how routine full-body massage sessions can reduce stress, improve circulation, relieve muscle tension, and boost overall wellness. Learn why even just 10 minutes a day can make a big difference.', '2025-06-04 13:21:28', '2025-06-04 13:21:28'),
(2, 'Choosing the Right Massage Chair for Your Home or Business', 1, 'blogs/nkMNyPETOjdo7iOfkBaX6MlioRHeVrgCLZCn7cJv.png', 'choosing-the-right-massage-chair-for-your-home-or-business', 'Thinking of buying a massage chair? We break down the key features to look for, the best models for home use vs. commercial settings, and how to get the most value for your investment.', '2025-06-04 13:24:32', '2025-06-04 13:24:32'),
(3, 'Why Every Corporate Event Needs a Wellness Corner', 1, 'blogs/tbLA769QVo2jfTGNzXmJ5ff5ZR6eZ9KerGiW0QhS.jpg', 'why-every-corporate-event-needs-a-wellness-corner', 'Massage chair rentals are becoming a must-have at conferences, team-building events, and exhibitions. Here’s how Wawa’s chair hire service can leave a lasting impression on your guests or employees.', '2025-06-04 13:25:24', '2025-06-04 13:25:24'),
(4, 'Short on Time? Try Our 10-Minute Power Massage', 1, 'blogs/SOiQeiVNyUB8RP1BPPQ8Ho7aCGJPFMUlNwI1r62L.png', 'short-on-time-try-our-10-minute-power-massage', 'Don’t have time for a full spa day? Our quick massage sessions fit perfectly into your lunch break or between errands—proving that relaxation doesn’t have to take hours.', '2025-06-04 13:26:14', '2025-06-04 13:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, '4D Massage Chair', '4d-massage-chair', 'With years of experience in the massage and wellness industry, Wawa Fitness Center is committed to offering high-quality massage healthcare products that meet the highest standards of safety and performance. Our products are certified with essential industry approvals including CE, FCC, RoHS, and BSCI. We also work with manufacturers accredited with globally recognized certifications such as ISO 9001 (Quality Management), ISO 14001 (Environmental Management), and OHSAS 18001 (Occupational Health and Safety Management), ensuring reliability and customer satisfaction.', '2025-06-04 14:03:37', '2025-06-04 14:03:37'),
(2, '3D Massage Chair', '3d-massage-chair', 'With years of experience in the massage and wellness industry, Wawa Fitness Center is committed to offering high-quality massage healthcare products that meet the highest standards of safety and performance. Our products are certified with essential industry approvals including CE, FCC, RoHS, and BSCI. We also work with manufacturers accredited with globally recognized certifications such as ISO 9001 (Quality Management), ISO 14001 (Environmental Management), and OHSAS 18001 (Occupational Health and Safety Management), ensuring reliability and customer satisfaction.', '2025-06-04 14:04:01', '2025-06-04 14:04:01'),
(3, 'Walking Kneading Massage Chair', 'walking-kneading-massage-chair', 'With years of experience in the massage and wellness industry, Wawa Fitness Center is committed to offering high-quality massage healthcare products that meet the highest standards of safety and performance. Our products are certified with essential industry approvals including CE, FCC, RoHS, and BSCI. We also work with manufacturers accredited with globally recognized certifications such as ISO 9001 (Quality Management), ISO 14001 (Environmental Management), and OHSAS 18001 (Occupational Health and Safety Management), ensuring reliability and customer satisfaction.', '2025-06-04 14:04:22', '2025-06-04 14:04:22'),
(4, 'Fix Point Massage Chair', 'fix-point-massage-chair', 'With years of experience in the massage and wellness industry, Wawa Fitness Center is committed to offering high-quality massage healthcare products that meet the highest standards of safety and performance. Our products are certified with essential industry approvals including CE, FCC, RoHS, and BSCI. We also work with manufacturers accredited with globally recognized certifications such as ISO 9001 (Quality Management), ISO 14001 (Environmental Management), and OHSAS 18001 (Occupational Health and Safety Management), ensuring reliability and customer satisfaction.', '2025-06-04 14:04:43', '2025-06-04 14:04:43'),
(5, 'Massage Cushions & Pillows', 'massage-cushions-and-pillows', 'With years of experience in the massage and wellness industry, Wawa Fitness Center is committed to offering high-quality massage healthcare products that meet the highest standards of safety and performance. Our products are certified with essential industry approvals including CE, FCC, RoHS, and BSCI. We also work with manufacturers accredited with globally recognized certifications such as ISO 9001 (Quality Management), ISO 14001 (Environmental Management), and OHSAS 18001 (Occupational Health and Safety Management), ensuring reliability and customer satisfaction.', '2025-06-04 14:05:05', '2025-06-04 14:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `massage_chairs`
--

CREATE TABLE `massage_chairs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hiring_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_chairs`
--

INSERT INTO `massage_chairs` (`id`, `name`, `slug`, `meta`, `description`, `hiring_price`, `selling_price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '4D Newest Zero Gravity Massage Chair L66', '4d-newest-zero-gravity-massage-chair-l66', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', '4D Newest Zero Gravity Massage Chair L66', 123.00, 123000.00, 1, '2025-06-05 03:42:17', '2025-06-05 03:42:17'),
(2, 'Dual Core 3D 4D Zero Gravity Massage Chair L50S', 'dual-core-3d-4d-zero-gravity-massage-chair-l50s', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', 'As a direct manufacturer, we produce all our products in-house, ensuring first-hand pricing without middlemen. This allows us to offer highly competitive and cost-effective prices.', 12000.00, 12000000.00, 1, '2025-06-05 03:43:24', '2025-06-05 03:43:24'),
(3, 'New 4D Ai Music Zero Gravity Massage Chair L50', 'new-4d-ai-music-zero-gravity-massage-chair-l50', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', 'New 4D Ai Music Zero Gravity Massage Chair L50', 12.00, 12222.00, 1, '2025-06-05 03:44:41', '2025-06-05 03:44:41'),
(4, 'Commercial 3D SL Track Shiatsu massage chair L35A', 'commercial-3d-sl-track-shiatsu-massage-chair-l35a', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', '5 Years Hydrolysis resistant PU leather tasteless and wear-resistant; Health detection key\r\n● Back and forth telescopic 13cm 4D manipulator\r\n● SL guide rail, can realize kneading, finger pressing,\r\nBeating, kneading hammer synchronization and other massage techniques;\r\n● Full touch TFT LCD screen high-end grade.\r\n● Space capsule handrail design, handrail built-in storage tank,\r\n● Shoulder 4 air bag extrusion massage;\r\n● Arm double row big airbag wave massage;\r\n● The legs are fully wrapped with air bag extrusion massage, and the calf,\r\nAnkle bump massage function;\r\nWaist cushion large air bag extrusion package swing massage;\r\n● Back temperature function, temperature adjustable 30-60 degrees;\r\n● Plantar roller scraping massage, beautiful leg elastic expansion function;\r\n● Double electric push rod design, can realize linkage lifting,\r\nLeg rise and fall can be controlled independently,\r\n● One key zero gravity function, the distance against the wall only 5 cm; HIFI Bluetooth music;\r\n● 24V safe voltage design ● Voice control with English and Vietnamese voice', 1.00, 1.00, 1, '2025-06-05 03:58:27', '2025-06-05 03:58:27'),
(5, 'New Design 4D Zero Gravity Massage Chair L36', 'new-design-4d-zero-gravity-massage-chair-l36', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', 'New Design 4D Zero Gravity Massage Chair L36', 1.00, 1.00, 1, '2025-06-05 03:59:14', '2025-06-05 03:59:14'),
(6, 'Electric Full Body Heating Massage Chair ww-L35', 'electric-full-body-heating-massage-chair-yj-l35', 'A device for measuring blood pressure is a medical device that helps individuals monitor their blood pressure levels at home. The user places the cuff on their arm, presses a button to inflate it, and the device measures the pressure in the arteries as the cuff slowly deflates. This allows users to monitor their blood pressure regularly and make adjustments to their lifestyle and medication as needed to maintain healthy blood pressure levels. The device is easy to use and provides accurate readings for reliable home monitoring of blood pressure.', 'Electric Full Body Heating Massage Chair WW-L35', 1.00, 1.00, 1, '2025-06-05 04:00:03', '2025-06-05 04:00:03'),
(7, 'ABS 3D Newest Zero Gravity Massage Chair L39', 'abs-3d-newest-zero-gravity-massage-chair-l39', NULL, 'ABS 3D Newest Zero Gravity Massage Chair L39', 12.00, 12.00, 2, '2025-06-08 10:44:35', '2025-06-08 10:44:35'),
(8, 'New Intelligent Full Body Airbag Massage Chair L30A', 'new-intelligent-full-body-airbag-massage-chair-l30a', NULL, 'New Intelligent Full Body Airbag Massage Chair L30A', 1.00, 1.00, 2, '2025-06-08 10:46:13', '2025-06-08 10:46:13'),
(9, 'High Performance SL Track Massage Chair X10', 'high-performance-sl-track-massage-chair-x10', NULL, 'High Performance SL Track Massage Chair X10', 1.00, 1.00, 2, '2025-06-08 10:47:26', '2025-06-08 10:47:26'),
(10, 'Commercial 3D Electric SL Track Massage Chair L25', 'commercial-3d-electric-sl-track-massage-chair-l25', NULL, 'Commercial 3D Electric SL Track Massage Chair L25', 2.00, 2.00, 2, '2025-06-08 10:48:56', '2025-06-08 10:48:56'),
(11, 'Commercial 3d Zero Gravity Massage Chair L26A', 'commercial-3d-zero-gravity-massage-chair-l26a', NULL, 'Commercial 3d Zero Gravity Massage Chair L26A', 1.00, 1.00, 2, '2025-06-08 10:50:19', '2025-06-08 10:50:19'),
(12, 'New Full Body Zero gravity Massage Chair L19', 'new-full-body-zero-gravity-massage-chair-l19', NULL, 'New Full Body Zero gravity Massage Chair L19', 1.00, 1.00, 2, '2025-06-08 10:52:17', '2025-06-08 10:52:17'),
(13, 'Hot Selling Zero Gravity Massage Chair WW-L20', 'hot-selling-zero-gravity-massage-chair-ww-l20', NULL, 'Hot Selling Zero Gravity Massage Chair WW-L20', 1.00, 1.00, 2, '2025-06-08 10:53:08', '2025-06-08 10:53:08'),
(14, 'Popular 3D Shiatsu Home Massage Chair WW-L26', 'popular-3d-shiatsu-home-massage-chair-ww-l26', NULL, 'Popular 3D Shiatsu Home Massage Chair WW-L26', 1.00, 1.00, 2, '2025-06-08 10:54:29', '2025-06-08 10:54:29'),
(15, 'Luxury 3D Spa Full Body Massage Chair WW-L25', 'luxury-3d-spa-full-body-massage-chair-ww-l25', NULL, 'Luxury 3D Spa Full Body Massage Chair WW-L25', 1.00, 1.00, 2, '2025-06-08 10:55:51', '2025-06-08 10:55:51'),
(16, 'Electric Full Body Airbag Massage Chair WW-L21', 'electric-full-body-airbag-massage-chair-ww-l21', NULL, 'Electric Full Body Airbag Massage Chair WW-L21', 1.00, 1.00, 2, '2025-06-08 10:56:56', '2025-06-08 10:56:56'),
(17, 'Hot Zero Gravity Kneading Massage Chair WW-L27', 'hot-zero-gravity-kneading-massage-chair-ww-l27', NULL, 'Hot Zero Gravity Kneading Massage Chair WW-L27', 1.00, 1.00, 2, '2025-06-08 10:58:07', '2025-06-08 10:58:07'),
(18, 'Newest Design Electric SL Track Massage Chair WW-L30', 'newest-design-electric-sl-track-massage-chair-ww-l30', NULL, 'Newest Design Electric SL Track Massage Chair WW-L30', 1.00, 1.00, 2, '2025-06-08 10:59:27', '2025-06-08 10:59:27'),
(19, 'Smart Straight Rail Walking Massage Chair WW-V9Z', 'smart-straight-rail-walking-massage-chair-ww-v9z', NULL, 'Smart Straight Rail Walking Massage Chair WW-V9Z', 1.00, 1.00, 3, '2025-06-08 11:03:46', '2025-06-08 11:04:17'),
(20, 'Hot Selling Foot Home Massage Chair WW-V10', 'hot-selling-foot-home-massage-chair-ww-v10', NULL, 'Hot Selling Foot Home Massage Chair WW-V10', 1.00, 1.00, 3, '2025-06-08 11:06:27', '2025-06-08 11:06:27'),
(21, 'Good Foot Electric Multi Point Massage Chair WW-X7S', 'good-foot-electric-multi-point-massage-chair-ww-x7s', NULL, 'Good Foot Electric Multi Point Massage Chair WW-X7S', 1.00, 1.00, 3, '2025-06-08 11:07:16', '2025-06-08 11:07:16'),
(22, 'Luxury Body Straight Rail Walking Massage Chair WW-V8', 'luxury-body-straight-rail-walking-massage-chair-ww-v8', NULL, 'Luxury Body Straight Rail Walking Massage Chair WW-V8', 1.00, 1.00, 3, '2025-06-08 11:08:15', '2025-06-08 11:08:15'),
(23, 'Quality Sofa Straight Rail Walking Massage Chair WW-X9', 'quality-sofa-straight-rail-walking-massage-chair-ww-x9', NULL, 'Quality Sofa Straight Rail Walking Massage Chair WW-X9\r\nAs a direct manufacturer, we produce all our products in-house, ensuring first-hand pricing without middlemen. This allows us to offer highly competitive and cost-effective prices.', 1.00, 1.00, 3, '2025-06-08 11:09:27', '2025-06-08 11:09:27'),
(24, 'China Selling Zero Gravity Vending Massage Chair X9-1', 'china-selling-zero-gravity-vending-massage-chair-x9-1', NULL, 'China Selling Zero Gravity Vending Massage Chair X9-1', 1.00, 1.00, 4, '2025-06-08 11:10:30', '2025-06-08 11:10:30'),
(25, 'Latest Relax Spa Multi Point Massage Chair WW-S9B', 'latest-relax-spa-multi-point-massage-chair-ww-s9b', NULL, 'Latest Relax Spa Multi Point Massage Chair WW-S9B', 1.00, 1.00, 4, '2025-06-08 11:11:16', '2025-06-08 11:11:16'),
(26, 'Hot Foot Roller Multi Point Massage Chair WW-S9A', 'hot-foot-roller-multi-point-massage-chair-ww-s9a', NULL, 'Hot Foot Roller Multi Point Massage Chair WW-S9A', 1.00, 1.00, 4, '2025-06-08 11:12:08', '2025-06-08 11:12:08'),
(27, 'Good Price Zero Gravity Multi Point Massage WW-S9', 'good-price-zero-gravity-multi-point-massage-ww-s9', NULL, 'Good Price Zero Gravity Multi Point Massage WW-S9', 1.00, 1.00, 4, '2025-06-08 11:13:02', '2025-06-08 11:13:02'),
(28, 'New Double Legs Heating Massager Machine G63', 'new-double-legs-heating-massager-machine-g63', NULL, 'New Double Legs Heating Massager Machine G63', 1.00, 1.00, 5, '2025-06-08 11:17:57', '2025-06-08 11:17:57'),
(29, 'WW-820', 'ww-820', NULL, 'WW-820', 1.00, 1.00, 5, '2025-06-08 11:18:56', '2025-06-08 11:18:56'),
(30, 'WW-H6', 'ww-h6', NULL, 'WW-H6', 1.00, 1.00, 5, '2025-06-08 11:20:06', '2025-06-08 11:20:06'),
(31, 'WW-819', 'ww-819', NULL, 'WW-819', 1.00, 1.00, 5, '2025-06-08 11:21:04', '2025-06-08 11:21:04'),
(32, 'WW-628J-2', 'ww-628j-2', NULL, 'WW-628J-2\r\n\r\nAs a direct manufacturer, we produce all our products in-house, ensuring first-hand pricing without middlemen. This allows us to offer highly competitive and cost-effective prices.', 1.00, 1.00, 5, '2025-06-08 11:21:57', '2025-06-08 11:21:57'),
(33, 'WW-628CZ-6', 'ww-628cz-6', NULL, 'WW-628CZ-6', 1.00, 1.00, 5, '2025-06-08 11:23:00', '2025-06-08 11:23:00'),
(34, 'WW-628Y-7', 'ww-628y-7', NULL, 'WW-628Y-7', 1.00, 1.00, 5, '2025-06-08 11:24:03', '2025-06-08 11:24:03'),
(35, 'WW-628CZ-8A', 'ww-628cz-8a', NULL, 'WW-628CZ-8A', 1.00, 1.00, 5, '2025-06-08 11:24:38', '2025-06-08 11:24:38'),
(36, 'Pillow WW-F28', 'pillow-ww-f28', NULL, 'Pillow WW-F28', 1.00, 1.00, 5, '2025-06-08 11:25:57', '2025-06-08 11:25:57'),
(37, 'Pillow WW-830', 'pillow-ww-830', NULL, 'Pillow WW-830', 1.00, 1.00, 5, '2025-06-08 11:26:39', '2025-06-08 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `massage_chair_images`
--

CREATE TABLE `massage_chair_images` (
  `id` bigint UNSIGNED NOT NULL,
  `massage_chair_id` bigint UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_chair_images`
--

INSERT INTO `massage_chair_images` (`id`, `massage_chair_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'massage_chairs/c0BfS6Nbikin0HEKGP4HxKrey2VGiB15mTi0gs6L.jpg', '2025-06-05 03:42:17', '2025-06-05 03:42:17'),
(2, 2, 'massage_chairs/F6YqfQQ8QuqOvsw9ZXcMOyln5mnbyJ2eDUImgiae.jpg', '2025-06-05 03:43:24', '2025-06-05 03:43:24'),
(3, 3, 'massage_chairs/89nPKLOIaPERDJ0wJT6M0budI59R7xqqlweTG1nr.jpg', '2025-06-05 03:44:41', '2025-06-05 03:44:41'),
(4, 4, 'massage_chairs/wVHEOZcyynWougTDZEhhhy6uawu94ZJkpQEUKS0M.jpg', '2025-06-05 03:58:27', '2025-06-05 03:58:27'),
(5, 5, 'massage_chairs/fMtJgUiNLEbotiZiR8qMTFvNkgvpcBi36rooSpWv.jpg', '2025-06-05 03:59:14', '2025-06-05 03:59:14'),
(6, 6, 'massage_chairs/KDoNLicAUGlgLvA69rKZ14eHsbu0Uii7nq68JIMh.jpg', '2025-06-05 04:00:03', '2025-06-05 04:00:03'),
(7, 7, 'massage_chairs/t03Ehc0oyZWYSDP598YJYGey325TmqnXopjxyRQr.jpg', '2025-06-08 10:44:35', '2025-06-08 10:44:35'),
(8, 8, 'massage_chairs/UuzjeRrV2YS46cYvQ2gUtazTTwuaJ1FyvQeYTxQD.png', '2025-06-08 10:46:13', '2025-06-08 10:46:13'),
(9, 9, 'massage_chairs/aSnpz5JFZvjhl38c62JcGJkQwPIOIjuiflAf4fA6.jpg', '2025-06-08 10:47:26', '2025-06-08 10:47:26'),
(10, 10, 'massage_chairs/ZISa75F2kjHSSNTt2iFOfxLHhnr9qy9NvZpMlQPa.jpg', '2025-06-08 10:48:56', '2025-06-08 10:48:56'),
(11, 11, 'massage_chairs/NtSJgvGnnZb960XSFHFIKqv2LV9FtuPsWSmrjzwQ.jpg', '2025-06-08 10:50:19', '2025-06-08 10:50:19'),
(12, 12, 'massage_chairs/z0KvfpOToM2BjLf36m43DqjHnNSpSafBMOL63wpx.jpg', '2025-06-08 10:52:17', '2025-06-08 10:52:17'),
(13, 13, 'massage_chairs/XgAv5mF2q6SldB7nr3vltGBtpGl4AaNvv9kWyhTF.jpg', '2025-06-08 10:53:08', '2025-06-08 10:53:08'),
(14, 14, 'massage_chairs/jCe6GN4POVJVobO1ku5U7TprVYGHHvMsqpVbQeof.jpg', '2025-06-08 10:54:29', '2025-06-08 10:54:29'),
(15, 15, 'massage_chairs/tqD3755qzI5RZ3fWPctc74ELmiEMQEYeeEU19M7d.jpg', '2025-06-08 10:55:51', '2025-06-08 10:55:51'),
(16, 16, 'massage_chairs/az4rSCZvlFsTgjynTPok6TBjZkvK1Kft6vF0KD9K.jpg', '2025-06-08 10:56:56', '2025-06-08 10:56:56'),
(17, 17, 'massage_chairs/yfJQNmQHjl26aYRL8qOBtdykg4d4h2GrCCyx7kpf.jpg', '2025-06-08 10:58:07', '2025-06-08 10:58:07'),
(18, 18, 'massage_chairs/CkkL1JZXHN5Rmo8wb6nT3MdNCaWFkS2N90vYsLug.jpg', '2025-06-08 10:59:27', '2025-06-08 10:59:27'),
(19, 19, 'massage_chairs/9oRJLaGLBUj6KiUe3EZhbZ1HF948lYcoGDa4c3vX.jpg', '2025-06-08 11:03:46', '2025-06-08 11:03:46'),
(20, 20, 'massage_chairs/rXCe9goFFbdaFqEHEoXbFNm7a8DBIHOgIMkjaw0s.jpg', '2025-06-08 11:06:27', '2025-06-08 11:06:27'),
(21, 21, 'massage_chairs/inlwT9l3q1dyfqS92eZu2aAmiR8eMDyFM6sSmlXc.jpg', '2025-06-08 11:07:16', '2025-06-08 11:07:16'),
(22, 22, 'massage_chairs/wYaDjQxQTJRlsSJTIFb69RPBieqSvkH5T7Qyc37L.jpg', '2025-06-08 11:08:15', '2025-06-08 11:08:15'),
(23, 23, 'massage_chairs/E1l85h7PVJa9OIAUOnu0mvJz6vut8JIV3acCjCC8.jpg', '2025-06-08 11:09:27', '2025-06-08 11:09:27'),
(24, 24, 'massage_chairs/qIMxWB3FPwNEGJPPqQ9dF9tleQujQmErtMkvAyBp.jpg', '2025-06-08 11:10:30', '2025-06-08 11:10:30'),
(25, 25, 'massage_chairs/2FkKXnD2DYwkUsgUhNbeyilkFxX8nCUly5ceJmrf.jpg', '2025-06-08 11:11:16', '2025-06-08 11:11:16'),
(26, 26, 'massage_chairs/vjf05auTUi4RL67FAn7JewmhvEi6NyE5NyD0J3Ou.jpg', '2025-06-08 11:12:08', '2025-06-08 11:12:08'),
(27, 27, 'massage_chairs/Wke8UNjHEMGgtX6g1EyT61L7Bb5ZaHeNcIpbbiFS.jpg', '2025-06-08 11:13:02', '2025-06-08 11:13:02'),
(28, 28, 'massage_chairs/qi0hEw7htvJEsnZD5atI0U8BO2l1fy1s2SyiRiEn.jpg', '2025-06-08 11:17:57', '2025-06-08 11:17:57'),
(29, 29, 'massage_chairs/iVmkLpDzjKZhczQVlB0tpu9tJzWbQJ3Q86iERWoJ.jpg', '2025-06-08 11:18:56', '2025-06-08 11:18:56'),
(30, 30, 'massage_chairs/TJ8mb4x9WC9qgUi1W39xdlQM0Ivebb0Fm1oKtFN4.jpg', '2025-06-08 11:20:06', '2025-06-08 11:20:06'),
(31, 31, 'massage_chairs/qj7Ag4VY1HdlucgYkLSwbw44T46DpeMaRYY87ipz.jpg', '2025-06-08 11:21:04', '2025-06-08 11:21:04'),
(32, 32, 'massage_chairs/vttrJ6EcYwHTvH9SDtPsIPg5Elw0OieoefOY4JOM.jpg', '2025-06-08 11:21:57', '2025-06-08 11:21:57'),
(33, 33, 'massage_chairs/4FnTNAME23qSCgP6CIAscVPZT7UTcsCDb66a8JzM.jpg', '2025-06-08 11:23:00', '2025-06-08 11:23:00'),
(34, 34, 'massage_chairs/HxiLEcnPJTLcyBeWXobYePkAaftORgldy2qtSLJ3.jpg', '2025-06-08 11:24:03', '2025-06-08 11:24:03'),
(35, 35, 'massage_chairs/SIgoQ2kPSPyouZjZAGzS56P6H8Id7zVejqLsxEey.jpg', '2025-06-08 11:24:38', '2025-06-08 11:24:38'),
(36, 36, 'massage_chairs/AzGZK6HPFeOdQF8ptOXvuum8h1YWKUpRvZt4TFtA.jpg', '2025-06-08 11:25:57', '2025-06-08 11:25:57'),
(37, 37, 'massage_chairs/SK3mYBKUw9vV60arX74zDkQkAWHMDnnMLjpUfqfD.jpg', '2025-06-08 11:26:39', '2025-06-08 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_04_071025_create_categories_table', 1),
(5, '2025_06_04_071025_create_massage_chairs_table', 1),
(6, '2025_06_04_071026_create_massage_chair_images_table', 1),
(7, '2025_06_04_072022_create_site_settings_table', 2),
(8, '2025_06_04_152246_create_services_table', 3),
(9, '2025_06_04_180000_create_blogs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `massage_chairs`
--
ALTER TABLE `massage_chairs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `massage_chairs_slug_unique` (`slug`),
  ADD KEY `massage_chairs_category_id_foreign` (`category_id`);

--
-- Indexes for table `massage_chair_images`
--
ALTER TABLE `massage_chair_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `massage_chair_images_massage_chair_id_foreign` (`massage_chair_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `massage_chairs`
--
ALTER TABLE `massage_chairs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `massage_chair_images`
--
ALTER TABLE `massage_chair_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `massage_chairs`
--
ALTER TABLE `massage_chairs`
  ADD CONSTRAINT `massage_chairs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `massage_chair_images`
--
ALTER TABLE `massage_chair_images`
  ADD CONSTRAINT `massage_chair_images_massage_chair_id_foreign` FOREIGN KEY (`massage_chair_id`) REFERENCES `massage_chairs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
