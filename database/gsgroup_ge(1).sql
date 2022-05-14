-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 11:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsgroup.ge`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disabled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(58, '20220419164701.png', 'https://www.facebook.com/KolosResidence', 'enable', '2022-04-18 16:34:58', '2022-04-19 12:47:01'),
(61, '20220419164552.png', 'https://www.facebook.com/ParadiseGeorgiaGroup/', 'enable', '2022-04-18 16:36:59', '2022-04-19 12:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `client_translations`
--

CREATE TABLE `client_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_translations`
--

INSERT INTO `client_translations` (`id`, `client_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(172, 58, 'en', 'Kolos Residence', 'Kolos Residence', '2022-04-18 16:34:58', '2022-04-19 12:47:01'),
(173, 58, 'ka', 'კოლოს რეზიდენსი', 'კოლოს რეზიდენსი', '2022-04-18 16:34:58', '2022-04-19 12:47:01'),
(174, 58, 'ru', 'კოლოს რეზიდენსი', 'კოლოს რეზიდენსი', '2022-04-18 16:34:58', '2022-04-19 12:47:01'),
(181, 61, 'en', 'Paradise Georgia', 'Paradise Georgia', '2022-04-18 16:36:59', '2022-04-19 12:45:52'),
(182, 61, 'ka', 'Paradise Georgia', 'Paradise Georgia', '2022-04-18 16:36:59', '2022-04-19 12:45:52'),
(183, 61, 'ru', 'Paradise Georgia', 'Paradise Georgia', '2022-04-18 16:36:59', '2022-04-19 12:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '+995 514 11 11 11', NULL, '20220313181123.svg', 1, '2022-03-13 14:11:23', '2022-03-13 22:25:24'),
(3, '+74 994 031 276', NULL, '20220313181731.svg', 1, '2022-03-13 14:17:31', '2022-03-13 22:26:08'),
(4, '+380 67 616 22 22', NULL, '20220313182341.svg', 1, '2022-03-13 14:23:41', '2022-03-13 22:25:04'),
(8, '+7 747 928 9898', NULL, '20220322113153.jpg', 1, '2022-03-15 22:00:44', '2022-03-22 07:31:53'),
(9, '+48 730 002 830', NULL, '20220322113144.png', 1, '2022-03-22 01:27:28', '2022-03-22 07:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact_translations`
--

CREATE TABLE `contact_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_translations`
--

INSERT INTO `contact_translations` (`id`, `contact_id`, `locale`, `address`, `created_at`, `updated_at`) VALUES
(4, 2, 'en', '<p> Batumi ,Inasaridze st 13</p><p>Tbilisi, Rustaveli Avenue 1</p>', '2022-03-13 14:11:23', '2022-03-22 11:51:56'),
(5, 2, 'ka', '<p> ბათუმი, ანგისის I ჩიხი 20</p><p>თბილისი, რუსთაველის გამზირი 1</p>', '2022-03-13 14:11:23', '2022-03-22 11:50:38'),
(6, 2, 'ru', '<p> Батуми ,Ул. Ангиса 20</p><p>Тбилиси, проспект Руставели 1</p>', '2022-03-13 14:11:23', '2022-03-22 11:52:44'),
(7, 3, 'en', 'Russia, Moscow, 17 Butlerova str, business center NeoGeo', '2022-03-13 14:17:31', '2022-03-13 14:17:31'),
(8, 3, 'ka', 'რუსეთი, მოსკოვი, ბუტლეროვა ქ. 17, ბიზნეს-ცენტრი «ნეო გეო»', '2022-03-13 14:17:31', '2022-03-13 14:17:31'),
(9, 3, 'ru', 'Москва, ул Бутлерова Дом 17, БЦ Гео Нео', '2022-03-13 14:17:31', '2022-03-13 14:17:31'),
(10, 4, 'en', 'Ukraine, Kiyv, 11-13 Str Predslavinskaya', '2022-03-13 14:23:41', '2022-03-13 14:23:41'),
(11, 4, 'ka', 'უკრაინა, კიევი, პრედსლავინსკაია ქ. 11-13<br>', '2022-03-13 14:23:41', '2022-03-22 11:50:23'),
(12, 4, 'ru', 'Украина, г. Киев, ул. Предславинская. 11-13', '2022-03-13 14:23:41', '2022-03-13 14:23:41'),
(22, 8, 'en', 'Almaty . Tole Bi St. #55, «City hub» - first floor', '2022-03-15 22:00:44', '2022-03-15 22:00:44'),
(23, 8, 'ka', 'ქალაქი ალმაატა- ტოლე ბის ქუჩა #55 «City hub»- პირველი სართული', '2022-03-15 22:00:44', '2022-03-15 22:00:44'),
(24, 8, 'ru', 'Город Алматы - Улица Толе би 55, «City hub» 1 этаж', '2022-03-15 22:00:44', '2022-03-15 22:00:44'),
(25, 9, 'en', 'ul. Chmielna 73, CIC, Warszawa', '2022-03-22 01:27:28', '2022-03-22 01:27:28'),
(26, 9, 'ka', 'ვარშავა. ჩმიელნა ქ. #73', '2022-03-22 01:27:28', '2022-03-22 01:27:28'),
(27, 9, 'ru', 'ul. Chmielna 73, CIC, Warszawa', '2022-03-22 01:27:28', '2022-03-22 01:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_translations`
--

CREATE TABLE `employee_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exclusives`
--

CREATE TABLE `exclusives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exclusives`
--

INSERT INTO `exclusives` (`id`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(6, '20220512204438.png', 'Duis esse inventore', 1, '2022-05-12 16:44:38', '2022-05-12 16:44:38'),
(7, '20220512204459.png', 'Corporis qui volupta', 1, '2022-05-12 16:44:59', '2022-05-12 16:45:26'),
(8, '20220512204903.png', 'Fugit quasi quia vo', 1, '2022-05-12 16:49:03', '2022-05-12 16:49:40'),
(9, '20220512204915.png', 'Numquam modi est mag', 1, '2022-05-12 16:49:15', '2022-05-12 16:49:15'),
(10, '20220512204929.png', 'Dicta nisi id et lab', 1, '2022-05-12 16:49:29', '2022-05-12 16:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive_translations`
--

CREATE TABLE `exclusive_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exclusive_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exclusive_translations`
--

INSERT INTO `exclusive_translations` (`id`, `exclusive_id`, `locale`, `title`, `name`, `description`, `created_at`, `updated_at`) VALUES
(16, 6, 'en', 'At nihil voluptate e', 'Andrew Fleming', 'Qui rem in aperiam v', '2022-05-12 16:44:38', '2022-05-12 16:44:38'),
(17, 6, 'ka', 'Minima fugiat praese', 'Zeph Wilder', 'Illum quo inventore', '2022-05-12 16:44:38', '2022-05-12 16:44:38'),
(18, 6, 'ru', 'Ipsa enim dolore es', 'Angela Massey', 'Cupidatat qui non in', '2022-05-12 16:44:38', '2022-05-12 16:44:38'),
(19, 7, 'en', 'Nisi pariatur Dolor', 'Ronan Pate', 'Eos Nam ut alias ex', '2022-05-12 16:44:59', '2022-05-12 16:44:59'),
(20, 7, 'ka', 'Qui earum in debitis', 'Casey Franco', 'Hic fugiat est quos', '2022-05-12 16:44:59', '2022-05-12 16:44:59'),
(21, 7, 'ru', 'Dolorem voluptas eni', 'Uriah Bender', 'Voluptas inventore l', '2022-05-12 16:44:59', '2022-05-12 16:44:59'),
(22, 8, 'en', 'Eiusmod quis laborum', 'September Moran', 'Eu vel nisi voluptas', '2022-05-12 16:49:03', '2022-05-12 16:49:03'),
(23, 8, 'ka', 'Qui sint obcaecati o', 'Daria Hoffman', 'Odio sit in possimus', '2022-05-12 16:49:03', '2022-05-12 16:49:03'),
(24, 8, 'ru', 'Quos amet tenetur p', 'Lynn Guthrie', 'In quam perferendis', '2022-05-12 16:49:03', '2022-05-12 16:49:03'),
(25, 9, 'en', 'Dignissimos officia', 'Diana Bell', 'Aut unde aut est dol', '2022-05-12 16:49:15', '2022-05-12 16:49:15'),
(26, 9, 'ka', 'Magna quasi qui illo', 'Kalia Gilliam', 'Sequi praesentium et', '2022-05-12 16:49:15', '2022-05-12 16:49:15'),
(27, 9, 'ru', 'Omnis quam cumque et', 'Teagan Colon', 'Tempore quis velit', '2022-05-12 16:49:15', '2022-05-12 16:49:15'),
(28, 10, 'en', 'Quis consectetur ex', 'Lawrence Mays', 'Nihil iusto enim ips', '2022-05-12 16:49:29', '2022-05-12 16:49:29'),
(29, 10, 'ka', 'Odio libero est non', 'Wing Horne', 'Et aute laboris anim', '2022-05-12 16:49:29', '2022-05-12 16:49:29'),
(30, 10, 'ru', 'Laboriosam aute fug', 'Donovan Mason', 'Proident in ea quia', '2022-05-12 16:49:29', '2022-05-12 16:49:29');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'en', '2021-12-26 04:01:46', '2021-12-26 04:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `lives`
--

CREATE TABLE `lives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lives`
--

INSERT INTO `lives` (`id`, `image`, `link`, `rank`, `status`, `created_at`, `updated_at`) VALUES
(1, '20220321132207.jpg', 'https://rtsp.me/embed/sNdGrA37/', '1', 1, '2022-03-21 09:22:07', '2022-03-21 09:22:07'),
(2, '20220321171234.jpg', 'https://rtsp.me/embed/YTDy9Y8Y/', '2', 1, '2022-03-21 13:12:34', '2022-03-21 13:12:34'),
(3, '20220321233541.jpg', 'https://rtsp.me/embed/2ByErS7T/', '3', 1, '2022-03-21 13:13:33', '2022-03-22 08:17:28'),
(4, '20220321232538.jpg', 'https://rtsp.me/embed/68H4YRBQ/', '4', 1, '2022-03-21 19:25:38', '2022-03-21 19:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `live_translations`
--

CREATE TABLE `live_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `live_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_translations`
--

INSERT INTO `live_translations` (`id`, `live_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'WYNDHAM RESIDENCE BATUMI', '2022-03-21 09:22:07', '2022-03-21 09:22:07'),
(2, 1, 'ka', 'WYNDHAM RESIDENCE BATUMI', '2022-03-21 09:22:07', '2022-03-21 09:22:07'),
(3, 1, 'ru', 'WYNDHAM RESIDENCE BATUMI', '2022-03-21 09:22:07', '2022-03-21 09:22:07'),
(4, 2, 'en', 'NEXT WHITE', '2022-03-21 13:12:34', '2022-03-21 13:12:34'),
(5, 2, 'ka', 'NEXT WHITE', '2022-03-21 13:12:34', '2022-03-21 13:12:34'),
(6, 2, 'ru', 'NEXT WHITE', '2022-03-21 13:12:34', '2022-03-21 13:12:34'),
(7, 3, 'en', 'NEXT GREEN', '2022-03-21 13:13:33', '2022-03-21 13:13:33'),
(8, 3, 'ka', 'NEXT GREEN', '2022-03-21 13:13:33', '2022-03-21 13:13:33'),
(9, 3, 'ru', 'NEXT GREEN', '2022-03-21 13:13:33', '2022-03-21 13:13:33'),
(10, 4, 'en', 'NEXT APARTMENTS', '2022-03-21 19:25:38', '2022-03-21 19:25:38'),
(11, 4, 'ka', 'NEXT APARTMENTS', '2022-03-21 19:25:38', '2022-03-21 19:25:38'),
(12, 4, 'ru', 'NEXT APARTMENTS', '2022-03-21 19:25:38', '2022-03-21 19:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_translations`
--

CREATE TABLE `message_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_08_29_200844_create_languages_table', 1),
(4, '2018_08_29_205156_create_translations_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_08_12_014722_create_permission_tables', 1),
(7, '2021_08_12_014733_create_posts_table', 1),
(8, '2021_12_06_090353_create_post_translations_table', 1),
(9, '2021_12_18_141228_create_pages_table', 1),
(10, '2021_12_21_111633_create_contacts_table', 1),
(11, '2021_12_24_215528_create_clients_table', 1),
(15, '2021_12_26_072418_create_places_table', 2),
(16, '2021_12_26_073511_create_place_translations_table', 2),
(17, '2022_01_01_193700_create_categories_table', 2),
(18, '2022_01_03_144525_create_category_translations_table', 2),
(19, '2022_01_05_111526_create_tables_table', 3),
(20, '2022_01_09_152436_create_products_table', 4),
(21, '2022_01_09_152920_create_product_translations_table', 4),
(22, '2022_01_11_083356_create_reservations_table', 5),
(23, '2022_01_13_084017_create_messages_table', 6),
(24, '2022_01_13_084600_create_message_translations_table', 6),
(25, '2022_01_20_160345_create_settings_table', 7),
(26, '2022_01_20_162023_create_setting_translations_table', 7),
(27, '2022_01_21_171753_create_networks_table', 8),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(29, '2022_02_03_135223_create_orders_table', 10),
(30, '2022_03_13_145034_create_contacts_table', 11),
(31, '2022_03_13_145402_create_contact_translations_table', 11),
(32, '2022_03_17_010457_create_employees_table', 12),
(33, '2022_03_17_010552_create_employee_translations_table', 12),
(34, '2022_03_21_115315_create_lives_table', 13),
(35, '2022_03_21_115725_create_live_translations_table', 13),
(36, '2022_04_19_145337_create_services_table', 14),
(37, '2022_04_19_145634_create_service_translations_table', 14),
(44, '2022_04_19_170220_create_projects_table', 15),
(45, '2022_04_19_170239_create_project_translations_table', 15),
(46, '2022_04_19_174050_create_visions_table', 15),
(47, '2022_04_19_174458_create_vision_translations_table', 15),
(50, '2022_04_19_170220_create_exclusives_table', 16),
(51, '2022_04_19_170239_create_exclusive_translations_table', 16),
(52, '2022_05_10_114949_create_privacy_policies_table', 17),
(53, '2022_05_10_115911_create_privacy_policy_translations_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `icon`, `image`, `link`, `frame`, `created_at`, `updated_at`) VALUES
(25, 'fab fa-facebook', NULL, 'https://www.facebook.com/Georgian-Sales-Group-100631215555633/', '123', '2022-04-22 09:36:51', '2022-04-22 10:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `table_id`, `place_id`, `product_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(13, 5, NULL, NULL, 18, 5, NULL, NULL, '2022-02-03 19:21:52'),
(14, 5, NULL, NULL, 19, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@kerdzebi.ge', '$2y$10$KAq74t8XMXbELQizDm4KsOsnyDAytvdLoopwXsVtXDTUzMZgkYxIy', '2022-01-11 08:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'მომხმარებლები', 'web', '2021-12-26 04:11:11', '2021-12-26 04:11:11'),
(2, 'user-create', 'მომხმარებლის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:08'),
(3, 'user-edit', 'მომხმარებლის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:51'),
(4, 'user-delete', 'მომხმარებლის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:59'),
(5, 'role-list', 'როლების ნახვა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:23'),
(6, 'role-create', 'როლის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:47'),
(7, 'role-edit', 'როლის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:59'),
(8, 'role-delete', 'როლის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:28:10'),
(9, 'permission-list', 'პრივილეგიების ნახვა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:28:32'),
(10, 'permission-create', 'პრივილეგიის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:04'),
(11, 'permission-edit', 'პრივილეგიის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:20'),
(12, 'permission-delete', 'პრივილეგიის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:34'),
(13, 'post-list', 'პოსტების დათვალიერება', 'web', '2021-12-26 04:11:11', '2022-01-22 05:52:48'),
(14, 'post-create', 'პოსტის შექმნა', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:06'),
(15, 'post-edit', 'პოსტის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:30'),
(16, 'post-delete', 'პოსტის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:50'),
(17, 'contact-list', 'კონტაქტების ნახვა', 'web', '2021-12-26 04:47:05', '2022-01-11 15:30:07'),
(18, 'contact-edit', 'კონტაქტის რედაქტირება', 'web', '2021-12-26 04:47:37', '2022-01-22 05:51:52'),
(19, 'contact-create', 'კონტაქტის შექმნა', 'web', '2021-12-26 04:48:23', '2022-01-22 05:52:09'),
(20, 'contact-delete', 'კონტაქტის წაშლა', 'web', '2021-12-26 04:48:51', '2022-01-31 19:52:58'),
(21, 'client-list', 'კლიენტები', 'web', '2021-12-26 08:39:18', '2021-12-26 08:39:18'),
(22, 'client-edit', 'კლიენტების რედაქტირება', 'web', '2021-12-26 08:40:34', '2021-12-26 08:40:34'),
(23, 'client-delete', 'კლიენტის წაშლა', 'web', '2021-12-26 08:40:58', '2021-12-26 08:40:58'),
(24, 'place-list', 'ადგილების ნახვა', 'web', '2022-01-06 06:47:35', '2022-01-06 06:47:35'),
(25, 'place-create', 'ადგილის შექმნა', 'web', '2022-01-06 06:48:10', '2022-01-06 06:48:10'),
(26, 'place-edit', 'ადგილის რედაქტირება', 'web', '2022-01-06 06:48:35', '2022-01-06 06:48:35'),
(27, 'place-delete', 'ადგილის წაშლა', 'web', '2022-01-06 06:48:57', '2022-01-06 06:48:57'),
(29, 'table-list', 'მაგიდების სია', 'web', '2022-01-08 09:43:16', '2022-01-08 09:43:16'),
(30, 'table-edit', 'მაგიდის რედაქტირება', 'web', '2022-01-08 09:44:18', '2022-01-08 09:44:18'),
(31, 'table-delete', 'მაგიდის წაშლა', 'web', '2022-01-08 09:44:45', '2022-01-08 09:44:45'),
(32, 'table-create', 'მაგიდის დამატება', 'web', '2022-01-08 09:46:00', '2022-01-08 09:46:00'),
(33, 'setting-list', 'პარამეტრების ნახვა', 'web', '2022-01-09 07:31:54', '2022-01-09 07:31:54'),
(34, 'setting-create', 'პარამეტრების შექმნა', 'web', '2022-01-09 07:32:43', '2022-01-09 07:32:43'),
(35, 'setting-edit', 'პარამეტრების რედაქტირება', 'web', '2022-01-09 07:33:33', '2022-01-09 07:33:33'),
(36, 'setting-delete', 'პარამეტრების წაშლა', 'web', '2022-01-09 07:34:08', '2022-01-09 07:34:08'),
(37, 'category-list', 'კატეგორიების სია', 'web', '2022-01-09 08:20:03', '2022-01-09 08:20:03'),
(38, 'category-create', 'კატეგორის დამატება', 'web', '2022-01-09 08:20:42', '2022-01-09 08:20:42'),
(39, 'category-edit', 'კატეგორის რედაქტირება', 'web', '2022-01-09 08:22:06', '2022-01-09 08:22:06'),
(40, 'category-delete', 'კატეგორის წაშლა', 'web', '2022-01-09 08:22:28', '2022-01-09 08:22:28'),
(41, 'product-list', 'პროდუქციის სია', 'web', '2022-01-09 14:54:35', '2022-01-09 14:54:52'),
(42, 'product-create', 'პროდუქტის დამატება', 'web', '2022-01-09 14:55:20', '2022-01-09 14:55:20'),
(43, 'product-edit', 'პროდუქტის რედაქტირება', 'web', '2022-01-09 14:55:41', '2022-01-09 14:55:41'),
(44, 'product-delete', 'პროდუქტის წაშლა', 'web', '2022-01-09 14:56:00', '2022-01-09 14:56:00'),
(45, 'reservation-list', 'რეზერვაციების სია', 'web', '2022-01-11 06:59:48', '2022-01-11 06:59:48'),
(46, 'reservation-create', 'რეზერვაციის დამატება', 'web', '2022-01-11 07:00:26', '2022-01-11 07:00:26'),
(47, 'reservation-edit', 'რეზერვაციის რედაქტირება', 'web', '2022-01-11 07:00:53', '2022-01-11 07:00:53'),
(48, 'reservation-delete', 'რეზერვაციის წაშლა', 'web', '2022-01-11 07:01:09', '2022-01-11 07:01:09'),
(51, 'token-list', 'ტოკენების სია', 'web', '2022-01-31 19:53:50', '2022-01-31 19:53:50'),
(52, 'token-create', 'ტოკენის შექმნა', 'web', '2022-01-31 19:54:21', '2022-01-31 19:54:21'),
(53, 'token-delete', 'ტოკენის წაშლა', 'web', '2022-01-31 19:54:38', '2022-01-31 19:54:38'),
(54, 'order-list', 'შეკვეთების ცხრილი', 'web', '2022-02-03 13:07:37', '2022-02-03 13:07:37'),
(55, 'order-create', 'შეკვეთის დამატება', 'web', '2022-02-03 13:08:16', '2022-02-03 13:08:16'),
(56, 'order-edit', 'შეკვეთის რედაქტირება', 'web', '2022-02-03 13:08:38', '2022-02-03 13:09:00'),
(57, 'order-delete', 'შეკვეთის წაშლა', 'web', '2022-02-03 13:09:15', '2022-02-03 13:09:15'),
(58, 'employee-list', 'თანამშრომლების სია', 'web', '2022-04-22 10:57:49', '2022-04-22 10:57:49'),
(59, 'employee-create', 'თანამშრომლის დამატება', 'web', '2022-04-22 10:58:50', '2022-04-22 10:58:50'),
(60, 'employee-edit', 'თანამშრომლის რედაქტირება', 'web', '2022-04-22 10:59:20', '2022-04-22 10:59:20'),
(61, 'employee-delete', 'თანამშრომლის წაშლა', 'web', '2022-04-22 10:59:50', '2022-04-22 10:59:50'),
(62, 'project-list', 'პროექტების სია', 'web', '2022-04-22 11:01:38', '2022-04-22 11:01:38'),
(63, 'project-create', 'პროექტის დამატება', 'web', '2022-04-22 11:02:10', '2022-04-22 11:02:10'),
(64, 'project-edit', 'პროექტის რედაქტირება', 'web', '2022-04-22 11:02:35', '2022-04-22 11:02:35'),
(65, 'project-delete', 'პროექტის წაშლა', 'web', '2022-04-22 11:03:01', '2022-04-22 11:03:01'),
(66, 'client-create', 'კლიენტის დამატება', 'web', '2022-04-22 11:05:20', '2022-04-22 11:05:20'),
(67, 'service-list', 'სერვისების სია', 'web', '2022-04-22 11:05:42', '2022-04-22 11:05:42'),
(68, 'service-create', 'სერვისის დამატება', 'web', '2022-04-22 11:06:57', '2022-04-22 11:06:57'),
(69, 'service-edit', 'სერვისის რედაქტირება', 'web', '2022-04-22 11:07:41', '2022-04-22 11:07:41'),
(70, 'service-delete', 'სერვისის წაშლა', 'web', '2022-04-22 11:08:06', '2022-04-22 11:08:06'),
(71, 'vision-list', 'მიზნები სია', 'web', '2022-04-22 11:10:04', '2022-04-22 11:10:04'),
(72, 'vision-create', 'მიზნის დამატება', 'web', '2022-04-22 11:10:30', '2022-04-22 11:10:30'),
(73, 'vision-edit', 'მიზნის რედაქტირება', 'web', '2022-04-22 11:11:17', '2022-04-22 11:11:17'),
(74, 'vision-delete', 'მიზნის წაშლა', 'web', '2022-04-22 11:11:38', '2022-04-22 11:11:38');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(10, 'App\\Models\\User', 1, 'BWP', '463ab3eb8d2661a1888837e4e2dccd7ccef428e08cd985fb0559305766835b65', '[\"*\"]', '2022-01-31 19:46:58', '2022-01-31 19:45:08', '2022-01-31 19:46:58'),
(13, 'App\\Models\\User', 5, 'Tok1', '9f854b835f65828e302c347895769c44d653ba038336949e2497282f32228843', '[\"*\"]', '2022-02-01 07:45:40', '2022-01-31 20:49:04', '2022-02-01 07:45:40'),
(14, 'App\\Models\\User', 1, 'Test', 'bbff699b401233c65f828724e0ed31f2618d85f86525c4a5fd302e8833900502', '[\"*\"]', '2022-02-01 07:48:13', '2022-02-01 07:44:51', '2022-02-01 07:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place_translations`
--

CREATE TABLE `place_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, '20220320124758.jpg', 1, '2022-03-20 08:47:58', '2022-03-20 08:47:58'),
(10, '20220320130633.jpg', 1, '2022-03-20 09:06:33', '2022-03-20 09:06:33'),
(11, '20220320131149.jpg', 1, '2022-03-20 09:11:49', '2022-03-20 09:11:49'),
(12, '20220320131425.jpg', 1, '2022-03-20 09:14:25', '2022-03-20 09:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `post_translations`
--

CREATE TABLE `post_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(19, 9, 'en', 'The tourist season in Batumi is officially open!', 'On June 15, the opening of the tourist season was officially announced! In connection with this event, the Department of Tourism of Adjara prepared an official ceremony that impressed all spectators and filled with optimism for the coming hot months of summer.', '2022-03-20 08:47:58', '2022-03-20 08:47:58'),
(20, 9, 'ka', 'ბათუმში ტურისტული სეზონი ოფიციალურად გაიხსნა!', '15 ივნისს ოფიციალურად გამოცხადდა ტურისტული სეზონის გახსნა! ამ მოვლენასთან დაკავშირებით, აჭარის ტურიზმის დეპარტამენტმა მოამზადა ოფიციალური ცერემონია, რომელმაც შთაბეჭდილება მოახდინა ყველა მაყურებელზე და შეავსო ისინი ოპტიმიზმით მომავალი ზაფხულის ცხელ თვეებში.', '2022-03-20 08:47:58', '2022-03-20 08:47:58'),
(21, 9, 'ru', 'Туристический сезон в Батуми официально открыт!', '15 июня было официально объявлено об открытии туристического сезона! В связи с этим событием Департамент Туризма Аджарии подготовил официальную церемонию, которая впечатлила всех зрителей и наполнила оптимизмом на предстоящие жаркие месяцы лета.', '2022-03-20 08:47:58', '2022-03-20 08:47:58'),
(22, 10, 'en', 'Wyndham Residence Batumi exhibition at the Galleria mall in Tbilisi', 'Next Group took part in the Moscow International Property Show - the first professional exhibition of foreign real estate in Russia. Its organizer is invariably the company aiGroup. The concept of the exhibition, specializing only in the foreign market, was first implemented in 2003.', '2022-03-20 09:06:33', '2022-03-20 09:06:33'),
(23, 10, 'ka', 'დაიწყო ახალი კომპლექსის მშენებლობა', 'ახალი პროექტი NEXT GROUP– ისგან - 5 ვარსკვლავიანი სასტუმრო კომპლექსი აჭარის საუკეთესო ტურისტულ ადგილას - გონიო, ადგილი, სადაც მწვანე ბორცვები ერწყმის ზღვის ზედაპირს ყველაზე სუფთა წყალთან რეგიონის მთელ სანაპიროზე.\r\n25-სართულიანი კომპლექსი აერთიანებს 5 ვარსკვლავიან ამერიკულ Wyndham Garden სასტუმროს და Wyndham Residences ბრენდირებულ რეზიდენციებს, რომლებსაც სრულად მოემსახურება Wyndham სასტუმროს ბრენდი.\r\nშეიტყვეთ მეტი ჩვენი ახალი პროექტის შესახებ - დაგვიკავშირდით ან დატოვეთ თქვენი საკონტაქტო ინფორმაცია \"კონტაქტების\" განყოფილებაში.', '2022-03-20 09:06:33', '2022-03-20 09:06:33'),
(24, 10, 'ru', 'Выставка Wyndham Residence Batumi в Galleria в Тбилиси', 'Продолжаются мероприятия, посвящённые компании.', '2022-03-20 09:06:33', '2022-03-20 09:06:33'),
(25, 11, 'en', 'Signed a contract with Wyndham Hotels', '..', '2022-03-20 09:11:49', '2022-03-20 09:11:49'),
(26, 11, 'ka', 'შეთანხმება Wyndham Hotels– თან', '..', '2022-03-20 09:11:49', '2022-03-20 09:11:49'),
(27, 11, 'ru', 'Signed a contract with Wyndham Hotels', '..', '2022-03-20 09:11:49', '2022-03-20 09:11:49'),
(28, 12, 'en', 'We opened offices in Moscow and Warsaw', '..', '2022-03-20 09:14:25', '2022-03-20 09:14:25'),
(29, 12, 'ka', 'We opened offices in Moscow and Warsaw', '..', '2022-03-20 09:14:25', '2022-03-20 09:14:25'),
(30, 12, 'ru', 'Мы открыли офисы в Москве и Варшаве', '..', '2022-03-20 09:14:25', '2022-03-20 09:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `cover`, `created_at`, `updated_at`) VALUES
(1, NULL, '2022-05-10 11:09:42', '2022-05-10 11:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy_translations`
--

CREATE TABLE `privacy_policy_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_policy_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policy_translations`
--

INSERT INTO `privacy_policy_translations` (`id`, `privacy_policy_id`, `locale`, `title`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Privacy Policy', 'Privacy Policy', 'Last updated: March 28, 2022\r\n\r\n \r\n\r\nThis Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.\r\n\r\n \r\n\r\nWe use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Template.\r\n\r\n \r\n\r\nCollecting and Using Your Personal Data\r\n\r\n \r\n\r\nTypes of Data Collected\r\n\r\n \r\n\r\nPersonal Data\r\n\r\nWhile using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:\r\n\r\n \r\n\r\nEmail address\r\nFirst name and last name\r\nPhone number\r\nAddress, State, Province, ZIP/Postal code, City\r\nUsage Data\r\n \r\n\r\nUsage Data\r\n\r\nUsage Data is collected automatically when using the Service.\r\n\r\n \r\n\r\nUsage Data may include information such as Your Devices Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWhen You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWe may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.\r\n\r\n \r\n\r\nInformation from Third-Party Social Media Services\r\n\r\n \r\n\r\nThe Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:\r\n\r\nGoogle\r\nFacebook\r\nTwitter\r\n \r\n\r\nIf You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Services account, such as Your name, Your email address, Your activities or Your contact list associated with that account.\r\n\r\n \r\n\r\nYou may also have the option of sharing additional information with the Company through Your Third-Party Social Media Services account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.\r\n\r\n \r\n\r\nTracking Technologies and Cookies\r\n\r\n \r\n\r\nCookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.\r\nFlash Cookies. Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_\r\n \r\n\r\nTo provide and maintain our Service, including to monitor the usage of our Service.\r\n\r\n \r\n\r\nTo manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.\r\n\r\n \r\n\r\nFor the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.\r\n\r\n \r\n\r\nTo contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile applications push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.\r\n\r\n \r\n\r\nTo provide You with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.\r\n\r\n \r\n\r\nTo manage Your requests: To attend and manage Your requests to Us.\r\n\r\n \r\n\r\nFor business transfers: We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.\r\n\r\n \r\n\r\nFor other purposes: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.\r\n\r\n \r\n\r\nTransfer of Your Personal Data\r\n\r\n \r\n\r\nYour information, including Personal Data, is processed at the Companys operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.\r\n\r\n \r\n\r\nYour consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.\r\n\r\n \r\n\r\nThe Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.\r\n\r\n \r\n\r\nSecurity of Your Personal Data\r\n\r\n \r\n\r\nThe security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.\r\n\r\n \r\n\r\nChanges to this Privacy Policy\r\n\r\n \r\n\r\nWe may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.\r\n\r\n \r\n\r\nWe will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.\r\n\r\n \r\n\r\nYou are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.', '2022-05-10 11:09:42', '2022-05-14 09:08:49'),
(2, 1, 'ka', 'კონფიდენციალურობის პოლიტიკა', 'კონფიდენციალურობის პოლიტიკა', 'Last updated: March 28, 2022\r\n\r\n \r\n\r\nThis Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.\r\n\r\n \r\n\r\nWe use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Template.\r\n\r\n \r\n\r\nCollecting and Using Your Personal Data\r\n\r\n \r\n\r\nTypes of Data Collected\r\n\r\n \r\n\r\nPersonal Data\r\n\r\nWhile using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:\r\n\r\n \r\n\r\nEmail address\r\nFirst name and last name\r\nPhone number\r\nAddress, State, Province, ZIP/Postal code, City\r\nUsage Data\r\n \r\n\r\nUsage Data\r\n\r\nUsage Data is collected automatically when using the Service.\r\n\r\n \r\n\r\nUsage Data may include information such as Your Devices Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWhen You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWe may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.\r\n\r\n \r\n\r\nInformation from Third-Party Social Media Services\r\n\r\n \r\n\r\nThe Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:\r\n\r\nGoogle\r\nFacebook\r\nTwitter\r\n \r\n\r\nIf You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Services account, such as Your name, Your email address, Your activities or Your contact list associated with that account.\r\n\r\n \r\n\r\nYou may also have the option of sharing additional information with the Company through Your Third-Party Social Media Services account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.\r\n\r\n \r\n\r\nTracking Technologies and Cookies\r\n\r\n \r\n\r\nCookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.\r\nFlash Cookies. Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_\r\n \r\n\r\nTo provide and maintain our Service, including to monitor the usage of our Service.\r\n\r\n \r\n\r\nTo manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.\r\n\r\n \r\n\r\nFor the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.\r\n\r\n \r\n\r\nTo contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile applications push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.\r\n\r\n \r\n\r\nTo provide You with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.\r\n\r\n \r\n\r\nTo manage Your requests: To attend and manage Your requests to Us.\r\n\r\n \r\n\r\nFor business transfers: We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.\r\n\r\n \r\n\r\nFor other purposes: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.\r\n\r\n \r\n\r\nTransfer of Your Personal Data\r\n\r\n \r\n\r\nYour information, including Personal Data, is processed at the Companys operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.\r\n\r\n \r\n\r\nYour consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.\r\n\r\n \r\n\r\nThe Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.\r\n\r\n \r\n\r\nSecurity of Your Personal Data\r\n\r\n \r\n\r\nThe security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.\r\n\r\n \r\n\r\nChanges to this Privacy Policy\r\n\r\n \r\n\r\nWe may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.\r\n\r\n \r\n\r\nWe will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.\r\n\r\n \r\n\r\nYou are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.', '2022-05-10 11:09:42', '2022-05-14 09:08:49'),
(3, 1, 'ru', 'Privacy Policy', 'Privacy Policy', 'Last updated: March 28, 2022\r\n\r\n \r\n\r\nThis Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.\r\n\r\n \r\n\r\nWe use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Template.\r\n\r\n \r\n\r\nCollecting and Using Your Personal Data\r\n\r\n \r\n\r\nTypes of Data Collected\r\n\r\n \r\n\r\nPersonal Data\r\n\r\nWhile using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:\r\n\r\n \r\n\r\nEmail address\r\nFirst name and last name\r\nPhone number\r\nAddress, State, Province, ZIP/Postal code, City\r\nUsage Data\r\n \r\n\r\nUsage Data\r\n\r\nUsage Data is collected automatically when using the Service.\r\n\r\n \r\n\r\nUsage Data may include information such as Your Devices Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWhen You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.\r\n\r\n \r\n\r\nWe may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.\r\n\r\n \r\n\r\nInformation from Third-Party Social Media Services\r\n\r\n \r\n\r\nThe Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:\r\n\r\nGoogle\r\nFacebook\r\nTwitter\r\n \r\n\r\nIf You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Services account, such as Your name, Your email address, Your activities or Your contact list associated with that account.\r\n\r\n \r\n\r\nYou may also have the option of sharing additional information with the Company through Your Third-Party Social Media Services account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.\r\n\r\n \r\n\r\nTracking Technologies and Cookies\r\n\r\n \r\n\r\nCookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.\r\nFlash Cookies. Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_\r\n \r\n\r\nTo provide and maintain our Service, including to monitor the usage of our Service.\r\n\r\n \r\n\r\nTo manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.\r\n\r\n \r\n\r\nFor the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.\r\n\r\n \r\n\r\nTo contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile applications push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.\r\n\r\n \r\n\r\nTo provide You with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.\r\n\r\n \r\n\r\nTo manage Your requests: To attend and manage Your requests to Us.\r\n\r\n \r\n\r\nFor business transfers: We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.\r\n\r\n \r\n\r\nFor other purposes: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.\r\n\r\n \r\n\r\nTransfer of Your Personal Data\r\n\r\n \r\n\r\nYour information, including Personal Data, is processed at the Companys operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.\r\n\r\n \r\n\r\nYour consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.\r\n\r\n \r\n\r\nThe Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.\r\n\r\n \r\n\r\nSecurity of Your Personal Data\r\n\r\n \r\n\r\nThe security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.\r\n\r\n \r\n\r\nChanges to this Privacy Policy\r\n\r\n \r\n\r\nWe may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.\r\n\r\n \r\n\r\nWe will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.\r\n\r\n \r\n\r\nYou are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.', '2022-05-10 11:09:42', '2022-05-14 09:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `status`, `price`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(23, NULL, 0, '85', NULL, NULL, '2022-03-19 19:16:53', '2022-03-19 19:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(67, 23, 'en', 'Imogene Lewis', 'Veniam et laboriosa', '2022-03-19 19:16:53', '2022-03-19 19:16:53'),
(68, 23, 'ka', 'Skyler Cummings', 'Culpa qui expedita', '2022-03-19 19:16:53', '2022-03-19 19:16:53'),
(69, 23, 'ru', 'Candice Sanders', 'Veniam quas ut erro', '2022-03-19 19:16:53', '2022-03-19 19:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(7, '20220506020440.png', NULL, 1, '2022-05-05 22:00:51', '2022-05-05 22:04:40'),
(8, '20220506020218.png', NULL, 1, '2022-05-05 22:02:18', '2022-05-05 22:02:18'),
(9, '20220506020413.png', NULL, 1, '2022-05-05 22:03:28', '2022-05-05 22:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `project_id`, `locale`, `title`, `name`, `description`, `created_at`, `updated_at`) VALUES
(13, 7, 'en', 'Kolos', 'KOLOS RESIDENCE', 'KOLOS RESIDENCE - უნიკალური ხედების მქონე პრემიუმ კლასის საცხოვრებელი კომპლექსია, რომელიც ზღვის პირველ ზოლში გთავაზობთ აპარტამენტებს საუცხოო ხედებით. იდეალური გარემო საცხოვრებლად დასასვენებლად და საინვესტიციოდ. კომპლექსი გამოირჩევა დახვეწილი არქიტექტურით, მშენებლობის უმაღლესი სტანდარტებითა და უნიკალური ინსფრასტრუქტურით :\r\n▪ 20 სართული\r\n▪ ღია და დახურული საცურაო აუზი\r\n▪ ფიტნეს ცენტრი\r\n▪ სავაჭრო ცენტრი\r\n▪ მულტიფუნქციური ეზო\r\n▪ თანამედროვე ავტოსადგომი', '2022-05-05 22:00:51', '2022-05-05 22:00:51'),
(14, 7, 'ka', 'Kolos', 'KOLOS RESIDENCE', 'KOLOS RESIDENCE - უნიკალური ხედების მქონე პრემიუმ კლასის საცხოვრებელი კომპლექსია, რომელიც ზღვის პირველ ზოლში გთავაზობთ აპარტამენტებს საუცხოო ხედებით. იდეალური გარემო საცხოვრებლად დასასვენებლად და საინვესტიციოდ. კომპლექსი გამოირჩევა დახვეწილი არქიტექტურით, მშენებლობის უმაღლესი სტანდარტებითა და უნიკალური ინსფრასტრუქტურით :\r\n▪ 20 სართული\r\n▪ ღია და დახურული საცურაო აუზი\r\n▪ ფიტნეს ცენტრი\r\n▪ სავაჭრო ცენტრი\r\n▪ მულტიფუნქციური ეზო\r\n▪ თანამედროვე ავტოსადგომი', '2022-05-05 22:00:51', '2022-05-05 22:00:51'),
(15, 7, 'ru', 'Kolos', 'KOLOS RESIDENCE', 'KOLOS RESIDENCE - უნიკალური ხედების მქონე პრემიუმ კლასის საცხოვრებელი კომპლექსია, რომელიც ზღვის პირველ ზოლში გთავაზობთ აპარტამენტებს საუცხოო ხედებით. იდეალური გარემო საცხოვრებლად დასასვენებლად და საინვესტიციოდ. კომპლექსი გამოირჩევა დახვეწილი არქიტექტურით, მშენებლობის უმაღლესი სტანდარტებითა და უნიკალური ინსფრასტრუქტურით :\r\n▪ 20 სართული\r\n▪ ღია და დახურული საცურაო აუზი\r\n▪ ფიტნეს ცენტრი\r\n▪ სავაჭრო ცენტრი\r\n▪ მულტიფუნქციური ეზო\r\n▪ თანამედროვე ავტოსადგომი', '2022-05-05 22:00:51', '2022-05-05 22:00:51'),
(16, 8, 'en', 'Paradise Georgia', 'Paradise Georgia', 'Paradise Georgia არჩევს საუკეთესო ლოკაციებს თქვენი ბედნიერებისთვის. დატკბით აჭარის მრავალფეროვანი თავისებურებებით ეკოლოგიურად სუფთა, ბუნებრივად გამწვანებულ და საოცარ გარემოში.\r\nParadise Georgia აერთიანებს საცხოვრებელი ვილების კომპლექსს ჭარნალსა და ჩაქვში :\r\n§  დახვეწილი არქიტექტურა\r\n§ ჭკვიანი სახლის სისტემები\r\n§ მაღალი ხარისხის სამშენებლო მასალები\r\n§ პროფესიონალ მშენებელთა გუნდი\r\n§  ხელმისაწვდომი გადახდის პირობები', '2022-05-05 22:02:18', '2022-05-05 22:02:18'),
(17, 8, 'ka', 'Paradise Georgia', 'Paradise Georgia', 'Paradise Georgia არჩევს საუკეთესო ლოკაციებს თქვენი ბედნიერებისთვის. დატკბით აჭარის მრავალფეროვანი თავისებურებებით ეკოლოგიურად სუფთა, ბუნებრივად გამწვანებულ და საოცარ გარემოში.\r\nParadise Georgia აერთიანებს საცხოვრებელი ვილების კომპლექსს ჭარნალსა და ჩაქვში :\r\n§  დახვეწილი არქიტექტურა\r\n§ ჭკვიანი სახლის სისტემები\r\n§ მაღალი ხარისხის სამშენებლო მასალები\r\n§ პროფესიონალ მშენებელთა გუნდი\r\n§  ხელმისაწვდომი გადახდის პირობები', '2022-05-05 22:02:18', '2022-05-05 22:02:18'),
(18, 8, 'ru', 'Paradise Georgia', 'Paradise Georgia', 'Paradise Georgia არჩევს საუკეთესო ლოკაციებს თქვენი ბედნიერებისთვის. დატკბით აჭარის მრავალფეროვანი თავისებურებებით ეკოლოგიურად სუფთა, ბუნებრივად გამწვანებულ და საოცარ გარემოში.\r\nParadise Georgia აერთიანებს საცხოვრებელი ვილების კომპლექსს ჭარნალსა და ჩაქვში :\r\n§  დახვეწილი არქიტექტურა\r\n§ ჭკვიანი სახლის სისტემები\r\n§ მაღალი ხარისხის სამშენებლო მასალები\r\n§ პროფესიონალ მშენებელთა გუნდი\r\n§  ხელმისაწვდომი გადახდის პირობები', '2022-05-05 22:02:18', '2022-05-05 22:02:18'),
(19, 9, 'en', 'Blue Tower', 'Blue Tower', 'საცხოვრებელი კომპლექსი Blue Tower მდებარეობს ზღვიდან 700 მეტრში, ბათუმის ყველაზე მშვიდ და ეკოლოგიურად სუფთა უბანში. ბაზარზე Საუკეთესო არჩევანია ხელმისაწვდომ ფასად \r\n\r\nᲘნფრასტრუქტურულად აერთიანებს :\r\n§  ტერასა საუცხოო ხედებით\r\n§  კეთილმოწყობილი ეზო\r\n§  ორ დონიანი ავტოპარკინგი\r\n§  დასასვენებელი და ბავშვთა გასართობი სივრცეები', '2022-05-05 22:03:28', '2022-05-05 22:03:28'),
(20, 9, 'ka', 'Blue Tower', 'Blue Tower', 'საცხოვრებელი კომპლექსი Blue Tower მდებარეობს ზღვიდან 700 მეტრში, ბათუმის ყველაზე მშვიდ და ეკოლოგიურად სუფთა უბანში. ბაზარზე Საუკეთესო არჩევანია ხელმისაწვდომ ფასად \r\n\r\nᲘნფრასტრუქტურულად აერთიანებს :\r\n§  ტერასა საუცხოო ხედებით\r\n§  კეთილმოწყობილი ეზო\r\n§  ორ დონიანი ავტოპარკინგი\r\n§  დასასვენებელი და ბავშვთა გასართობი სივრცეები', '2022-05-05 22:03:28', '2022-05-05 22:03:28'),
(21, 9, 'ru', 'Blue Tower', 'Blue Tower', 'საცხოვრებელი კომპლექსი Blue Tower მდებარეობს ზღვიდან 700 მეტრში, ბათუმის ყველაზე მშვიდ და ეკოლოგიურად სუფთა უბანში. ბაზარზე Საუკეთესო არჩევანია ხელმისაწვდომ ფასად \r\n\r\nᲘნფრასტრუქტურულად აერთიანებს :\r\n§  ტერასა საუცხოო ხედებით\r\n§  კეთილმოწყობილი ეზო\r\n§  ორ დონიანი ავტოპარკინგი\r\n§  დასასვენებელი და ბავშვთა გასართობი სივრცეები', '2022-05-05 22:03:28', '2022-05-05 22:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `person` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-12-26 04:11:31', '2021-12-26 04:11:31'),
(2, 'Manager', 'web', '2022-01-12 08:06:40', '2022-01-12 08:06:40'),
(3, 'API_Users', 'web', '2022-01-31 07:59:23', '2022-01-31 07:59:23'),
(4, 'ადმინისტრატორი', 'web', '2022-03-22 12:02:27', '2022-03-22 12:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 4),
(14, 1),
(14, 4),
(15, 1),
(15, 4),
(16, 1),
(16, 4),
(17, 1),
(17, 3),
(17, 4),
(18, 1),
(18, 4),
(19, 1),
(19, 4),
(20, 1),
(20, 4),
(21, 1),
(21, 2),
(21, 3),
(21, 4),
(22, 1),
(22, 2),
(22, 4),
(23, 1),
(23, 2),
(23, 4),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(25, 1),
(25, 2),
(25, 4),
(26, 1),
(26, 2),
(26, 4),
(27, 1),
(27, 4),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(31, 1),
(32, 1),
(32, 2),
(33, 1),
(33, 3),
(33, 4),
(34, 1),
(34, 4),
(35, 1),
(35, 4),
(36, 1),
(36, 4),
(37, 1),
(37, 2),
(37, 3),
(37, 4),
(38, 1),
(38, 2),
(38, 4),
(39, 1),
(39, 2),
(39, 4),
(40, 1),
(40, 4),
(41, 1),
(41, 2),
(41, 3),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(45, 1),
(45, 2),
(45, 3),
(45, 4),
(46, 1),
(46, 2),
(46, 4),
(47, 1),
(47, 2),
(47, 4),
(48, 1),
(48, 4),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(4, NULL, 'fas fa-chart-bar', 0, '2022-04-19 12:12:02', '2022-05-11 14:07:21'),
(5, NULL, 'fas fa-copyright', 0, '2022-04-19 12:15:07', '2022-05-11 14:08:43'),
(6, NULL, 'far fa-object-group', 1, '2022-04-19 12:27:49', '2022-04-19 12:27:49'),
(7, NULL, 'fas fa-ad', 1, '2022-04-19 12:28:27', '2022-04-19 12:28:27'),
(8, NULL, 'fas fa-rocket', 1, '2022-04-19 12:28:57', '2022-04-19 12:28:57'),
(9, NULL, 'far fa-life-ring', 1, '2022-04-19 12:29:37', '2022-04-19 12:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(7, 4, 'en', 'Sales managment', 'Sales managment', '2022-04-19 12:12:02', '2022-05-11 01:20:48'),
(8, 4, 'ka', 'გაყიდვების პროცესის ორგანიზება', 'Организация процесса продаж', '2022-04-19 12:12:02', '2022-05-11 01:20:48'),
(9, 4, 'ru', 'Организация процесса продаж', 'გაყიდვების პროცესის ორგანიზება', '2022-04-19 12:12:02', '2022-05-11 01:20:48'),
(10, 5, 'en', 'Lead the exclusive projects', 'Lead the exclusive projects', '2022-04-19 12:15:07', '2022-05-11 01:21:30'),
(11, 5, 'ka', 'ექსკლუზიური ქონების მართვა', 'ექსკლუზიური ქონების მართვა', '2022-04-19 12:15:07', '2022-04-19 12:15:07'),
(12, 5, 'ru', 'Управление эксклюзивными проектами', 'Управление эксклюзивными проектами', '2022-04-19 12:15:07', '2022-05-11 01:21:30'),
(13, 6, 'en', 'Lead the investment projects', 'Lead the investment projects', '2022-04-19 12:27:49', '2022-05-11 01:22:03'),
(14, 6, 'ka', 'საინვესტიციო პროექტების მართვა', 'საინვესტიციო პროექტების მართვა', '2022-04-19 12:27:49', '2022-04-19 12:27:49'),
(15, 6, 'ru', 'Управление продукта для инвестиции', 'Управление продукта для инвестиции', '2022-04-19 12:27:49', '2022-05-11 01:22:03'),
(16, 7, 'en', 'Branding and Social media', 'Branding and Social media', '2022-04-19 12:28:27', '2022-05-11 01:22:34'),
(17, 7, 'ka', 'ბრენდინგი და სოც. მედია', 'ბრენდინგი და სოც. მედია', '2022-04-19 12:28:27', '2022-04-19 12:28:27'),
(18, 7, 'ru', 'Брендинг и соц. медия', 'Брендинг и соц. медия', '2022-04-19 12:28:27', '2022-05-11 01:22:34'),
(19, 8, 'en', 'Digital service', 'Digital service', '2022-04-19 12:28:57', '2022-05-11 01:23:03'),
(20, 8, 'ka', 'ციფრული მომსახურება', 'ციფრული მომსახურება', '2022-04-19 12:28:57', '2022-04-19 12:28:57'),
(21, 8, 'ru', 'Цифровые услуги', 'Цифровые услуги', '2022-04-19 12:28:57', '2022-05-11 01:23:03'),
(22, 9, 'en', 'Consultation for real estate', 'Consultation for real estate', '2022-04-19 12:29:37', '2022-05-11 01:23:29'),
(23, 9, 'ka', 'კონსულტაცია უძრავ ქონებასთან დაკავშირებით', 'კონსულტაცია უძრავ ქონებასთან დაკავშირებით', '2022-04-19 12:29:37', '2022-04-19 12:29:37'),
(24, 9, 'ru', 'Консульация по поводу недвижимости', 'Консульация по поводу недвижимости', '2022-04-19 12:29:37', '2022-05-11 01:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `email`, `logo`, `image`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(11, '(+995) 558 19 21 95', 'sales@domain.ge', '20220418210057.png', '20220418210206.png', '10:00:00', '19:00:00', '2022-01-21 07:02:44', '2022-04-18 17:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `name`, `title`, `description`, `address`, `start_time_text`, `end_time_text`, `created_at`, `updated_at`) VALUES
(26, 11, 'en', 'We are a team of professionals', 'Georgian Sales Group', 'Which competes successfully in the field of construction development.  The main activities are branding of construction projects, marketing and sales management.  We offer companies a full range of services from product packaging to the conclusion of the purchase agreement.', 'Georgia, Batum', 'Monday', 'Saturday', '2022-01-21 07:02:44', '2022-05-11 01:28:29'),
(27, 11, 'ka', 'ჩვენ ვართ პროფესიონალთა გუნდი', 'Georgian Sales Group', 'რომელიც სამშენებლო დეველოპერულ სფეროში წარმატებით ასპარეზობს. ძირითადი საქმიანობა გახლავთ სამშენებლო პროექტების ბრენდირება, მარკეტინგი და გაყიდვების მართვა. \r\nჩვენ კომპანიებს ვთავაზობთ მომსახურების სრულ პაკეტს პროდუქტის შეფუთვიდან ნასყიდობის ხელშეკრულების გაფორმებამდე.', 'საქართველო, ბათუმი', 'ორშაბათი', 'შაბათი', '2022-01-21 07:02:44', '2022-04-20 13:55:49'),
(28, 11, 'ru', 'Наша компания представляет собой комаду профессионалов', 'Georgian Sales Group', 'Которая успешно соревнуется за первенство в девелоперо - стрительной сфере. Нашей основной деятельностью является брендирование, маркетинг и управление продажами.Мы представляем полнвй пакет услуг для компаний начиная с оформления договора заканчивая упаковкой продукта', 'Georgia, Batum', 'Monday', 'Saturday', '2022-01-21 07:02:44', '2022-05-11 01:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `place_id`, `status`, `created_at`, `updated_at`) VALUES
(50, '1', 23, 0, NULL, '2022-04-19 10:51:24'),
(51, '2', 23, 1, NULL, NULL),
(52, '3', 23, 1, NULL, NULL),
(53, '1', 24, 1, NULL, NULL),
(54, '2', 24, 1, NULL, NULL),
(55, '3', 24, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Davit Gakhokia', 'd.gakhokia@cofi.ge', NULL, '$2y$10$/Pkd0L6F/Zd2J1o6JzGAPORwWqETMmyZHMhHMq4AAG49rQElBL0rK', NULL, '2021-12-26 04:12:05', '2022-04-15 08:26:01'),
(7, 'demo user', 'demo@cofi.ge', NULL, '$2y$10$Uq1zN.VLe6HwGprMXvVHOeqClQJQ7nyON.SyHybYL7yQmliChxALK', NULL, '2022-05-11 01:32:25', '2022-05-11 01:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, 1, '2022-05-11 01:25:00', '2022-05-11 01:25:00'),
(10, NULL, NULL, 1, '2022-05-11 01:25:42', '2022-05-11 01:25:42'),
(11, NULL, NULL, 1, '2022-05-11 01:26:12', '2022-05-11 01:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `vision_translations`
--

CREATE TABLE `vision_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_translations`
--

INSERT INTO `vision_translations` (`id`, `vision_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(25, 9, 'en', '01.', '11 years of experience', '2022-05-11 01:25:00', '2022-05-11 01:25:00'),
(26, 9, 'ka', '01.', '11 წლიანი გამოცდილება', '2022-05-11 01:25:00', '2022-05-11 01:25:00'),
(27, 9, 'ru', '01.', '11 - Летний стаж', '2022-05-11 01:25:00', '2022-05-11 01:25:00'),
(28, 10, 'en', '02.', 'Discuss the project in details with various field', '2022-05-11 01:25:42', '2022-05-11 01:25:42'),
(29, 10, 'ka', '02.', 'კომპლექსური მიდგომა', '2022-05-11 01:25:42', '2022-05-11 01:25:42'),
(30, 10, 'ru', '02.', 'Комплексный подход', '2022-05-11 01:25:42', '2022-05-11 01:25:42'),
(31, 11, 'en', '03.', 'Organized team', '2022-05-11 01:26:12', '2022-05-11 01:26:12'),
(32, 11, 'ka', '03.', 'ორგანიზებულობა', '2022-05-11 01:26:12', '2022-05-11 01:26:12'),
(33, 11, 'ru', '03.', 'Организация', '2022-05-11 01:26:12', '2022-05-11 01:26:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_translations`
--
ALTER TABLE `client_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_translations_client_id_locale_unique` (`client_id`,`locale`),
  ADD KEY `client_translations_locale_index` (`locale`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_translations`
--
ALTER TABLE `contact_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_translations_contact_id_locale_unique` (`contact_id`,`locale`),
  ADD KEY `contact_translations_locale_index` (`locale`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_translations`
--
ALTER TABLE `employee_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_translations_employee_id_locale_unique` (`employee_id`,`locale`),
  ADD KEY `employee_translations_locale_index` (`locale`);

--
-- Indexes for table `exclusives`
--
ALTER TABLE `exclusives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusive_translations`
--
ALTER TABLE `exclusive_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exclusive_translations_exclusive_id_locale_unique` (`exclusive_id`,`locale`),
  ADD KEY `exclusive_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_translations`
--
ALTER TABLE `live_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `live_translations_live_id_locale_unique` (`live_id`,`locale`),
  ADD KEY `live_translations_locale_index` (`locale`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_translations`
--
ALTER TABLE `message_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `message_translations_message_id_locale_unique` (`message_id`,`locale`),
  ADD KEY `message_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_translations`
--
ALTER TABLE `place_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place_translations_place_id_locale_unique` (`place_id`,`locale`),
  ADD KEY `place_translations_locale_index` (`locale`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_translations_post_id_locale_unique` (`post_id`,`locale`),
  ADD KEY `post_translations_locale_index` (`locale`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy_translations`
--
ALTER TABLE `privacy_policy_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `privacy_policy_translations_privacy_policy_id_locale_unique` (`privacy_policy_id`,`locale`),
  ADD KEY `privacy_policy_translations_locale_index` (`locale`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_translations_project_id_locale_unique` (`project_id`,`locale`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision_translations`
--
ALTER TABLE `vision_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vision_translations_vision_id_locale_unique` (`vision_id`,`locale`),
  ADD KEY `vision_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `client_translations`
--
ALTER TABLE `client_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_translations`
--
ALTER TABLE `contact_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_translations`
--
ALTER TABLE `employee_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `exclusives`
--
ALTER TABLE `exclusives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exclusive_translations`
--
ALTER TABLE `exclusive_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lives`
--
ALTER TABLE `lives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `live_translations`
--
ALTER TABLE `live_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message_translations`
--
ALTER TABLE `message_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `place_translations`
--
ALTER TABLE `place_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy_policy_translations`
--
ALTER TABLE `privacy_policy_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vision_translations`
--
ALTER TABLE `vision_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client_translations`
--
ALTER TABLE `client_translations`
  ADD CONSTRAINT `client_translations_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_translations`
--
ALTER TABLE `contact_translations`
  ADD CONSTRAINT `contact_translations_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_translations`
--
ALTER TABLE `employee_translations`
  ADD CONSTRAINT `employee_translations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exclusive_translations`
--
ALTER TABLE `exclusive_translations`
  ADD CONSTRAINT `exclusive_translations_exclusive_id_foreign` FOREIGN KEY (`exclusive_id`) REFERENCES `exclusives` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `live_translations`
--
ALTER TABLE `live_translations`
  ADD CONSTRAINT `live_translations_live_id_foreign` FOREIGN KEY (`live_id`) REFERENCES `lives` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_translations`
--
ALTER TABLE `message_translations`
  ADD CONSTRAINT `message_translations_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `place_translations`
--
ALTER TABLE `place_translations`
  ADD CONSTRAINT `place_translations_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `privacy_policy_translations`
--
ALTER TABLE `privacy_policy_translations`
  ADD CONSTRAINT `privacy_policy_translations_privacy_policy_id_foreign` FOREIGN KEY (`privacy_policy_id`) REFERENCES `privacy_policies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `vision_translations`
--
ALTER TABLE `vision_translations`
  ADD CONSTRAINT `vision_translations_vision_id_foreign` FOREIGN KEY (`vision_id`) REFERENCES `visions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
