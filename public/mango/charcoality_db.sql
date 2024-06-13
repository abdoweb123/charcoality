-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2024 at 12:29 AM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charcoality_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `image`, `status`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '33405497', NULL, 1, NULL, '$2y$10$Ux05A7MTagNwS51QpRoEDe.nX1mKZyOy1xSLl1TjyeJP9O4Oy5i.2', 'O1pxOe9qMus3oWnn0H4omRUTosczQk2jT1rLlMWA1AWo0S6pahrjHAJOXklv', NULL, '2022-10-09 08:52:15', '2023-05-31 09:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=UlWWZeeJU20', NULL, 1, '2023-07-17 13:10:09', '2023-07-19 13:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'لمسة رهيب على الجاي غير! ينقل المستوى والجلسة لعالم ثاني! تواصل معنا عبر الخاص ولا يفوتك', 'A terrible touch on the next gear! Moves the level and session to a second world! Contact us privately and do not miss it', 'الشواء في الهواء الطلق ليس كاملًا بدون فحمنا! 🍖🔥\r\nاطلب فحم رهيب الآن واستمتع بالمذاق المثالي! 🤤', 'Outdoor grilling isn\'t complete without our charcoal! 🍖🔥\r\nOrder awesome charcoal now and enjoy the perfect taste! 🤤', '/uploads/Blogs/1689600470_5478.webp', NULL, 1, '2023-07-17 13:27:50', '2023-07-17 13:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blanditiis sint exce', 'Fugit harum corrupt', 'Qui praesentium id', 'Aliquid quidem praes', NULL, 'Sed ea repellendus', 1, '2023-07-26 09:45:56', '2023-07-26 09:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Farrah Short', '+1 (685) 589-8963', 'xapurasyn@mailinator.com', 'Deserunt ex quam cul', 'Ut ipsam necessitati', '2023-07-09 10:37:56', '2023-07-09 10:37:56'),
(2, 'Daphne Rutledge', '+1 (319) 449-4415', 'pogupymod@mailinator.com', 'Officiis vel quam iu', 'Sunt nobis doloremqu', '2023-07-09 10:38:04', '2023-07-09 10:38:04'),
(3, 'Wylie Patterson', '+1 (977) 627-2763', 'biqufida@mailinator.com', 'Officia commodo pari', 'Minus excepturi ulla', '2023-07-09 10:39:01', '2023-07-09 10:39:01'),
(4, 'Gisela Snider', '+1 (832) 318-8273', 'fovutaqory@mailinator.com', 'Dolor consequat Qui', 'Eius velit fugiat a', '2023-07-09 10:39:36', '2023-07-09 10:39:36'),
(5, 'Mostafa Mohamed', '01208601044', 'mostafazarea69@gmail.com', 'Test', 'Test', '2023-07-19 10:57:42', '2023-07-19 10:57:42'),
(6, 'test', '12', 'test@gmail.com', 'test', 'test', '2023-07-23 07:24:28', '2023-07-23 07:24:28'),
(7, 'test', '12', 'test@gmail.com', 'test', 'test', '2023-07-23 07:42:38', '2023-07-23 07:42:38'),
(8, 'text', '01200504733', 'nada@nada.com', 'test', 'test', '2023-07-25 13:32:46', '2023-07-25 13:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `currancy_code_ar` varchar(255) DEFAULT NULL,
  `currancy_code_en` varchar(255) DEFAULT NULL,
  `currancy_value` decimal(5,3) NOT NULL DEFAULT 0.000,
  `phone_code` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `accept_orders` tinyint(1) NOT NULL DEFAULT 1,
  `length` int(11) NOT NULL DEFAULT 10,
  `decimals` int(11) NOT NULL DEFAULT 3,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title_ar`, `title_en`, `currancy_code_ar`, `currancy_code_en`, `currancy_value`, `phone_code`, `country_code`, `lat`, `long`, `status`, `accept_orders`, `length`, `decimals`, `image`, `created_at`, `updated_at`) VALUES
(1, 'البحرين', 'Bahrain', 'دينار', 'BHD', 0.100, '+973', 'BH', '25.93041400', '50.63777200', 1, 1, 8, 3, '/countries/Bahrain.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(2, 'السعودية', 'Saudi Arabia', 'ريال', 'SAR', 1.000, '+966', 'SA', '23.88594200', '45.07916200', 1, 1, 9, 2, '/countries/SaudiArabia.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(3, 'سلطنة عمان', 'Oman', 'ريال ', 'OR', 0.102, '+968', 'OM', '21.51258300', '55.92325500', 1, 1, 10, 3, '/countries/Oman.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(4, 'الإمارات العربية المتحدة', 'United Arab Emirates', 'درهم', 'AED', 1.000, '+971', 'AE', '23.42407600', '53.84781800', 1, 1, 9, 3, '/countries/UnitedArabEmirates.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(5, 'قطر', 'Qatar', 'ريال', 'QR', 1.000, '+974', 'QA', '25.35482600', '51.18388400', 1, 1, 10, 3, '/countries/Qatar.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(6, 'الكويت', 'Kuwait', 'دينار', 'KWD', 0.081, '+965', 'KW', '29.31166000', '47.48176600', 1, 1, 10, 3, '/countries/Kuwait.png', '2022-10-09 04:52:15', '2023-04-13 04:42:29'),
(7, 'مصر', 'Egypt', 'جنيه', 'EGP', 61.410, '+20', 'EG', '26.82055300', '30.80249800', 1, 1, 10, 3, '/countries/Egypt.png', '2022-10-09 04:52:15', '2023-05-15 02:13:43');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(255) DEFAULT NULL,
  `question_en` varchar(255) DEFAULT NULL,
  `answer_ar` text DEFAULT NULL,
  `answer_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question_ar`, `question_en`, `answer_ar`, `answer_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'حلول الفحم المتميزة لعملك', 'Premium Charcoal Solutions for Your Business', 'Charcoality هي شريكك الأمثل في تعزيز تجربة الشواء في مطعمك أو مقهاك. تم اختيار خيارات فحم الرحيب الفاخر والطبيعي لدينا، بما في ذلك الأشكال السداسية والإندونيسية والمكعبات والبرتقالية، بعناية لتوفير حرارة متسقة وأوقات احتراق أطول وتقليل إنتاج الرماد. ارفعي نكهات أطباقك وأبهري عملائك بالطعم الدخاني المميز فقط لدينا طبيعي 100%\r\nيمكن توصيل الفحم إلى البحرين والمملكة العربية السعودية.', 'Charcoality is your ultimate partner in enhancing the grilling experience at your restaurant or café. Our premium and natural Raheeb charcoal options, including Hexagons, Indonesian, Cubes, and Orange are carefully selected to provide consistent heat, longer burning times, and minimal ash production. Elevate the flavors of your dishes and impress your customers with the distinct smoky taste only our 100% natural\r\ncharcoal can deliver in Bahrain and KSA.', 1, '2023-07-09 10:52:25', '2023-11-25 08:51:18'),
(2, 'الطلبات بالجملة والحزم المخصصة', 'Bulk Orders and Customized Packages', 'نحن نفهم المتطلبات الفريدة لصناعة الخدمات الغذائية. لتلبية احتياجاتك الكبيرة، نقدم طلبات بالجملة من الفحم الطبيعي بأحجام 10 كجم و20 كجم في البحرين والمملكة العربية السعودية. فريقنا على استعداد لمساعدتك في إنشاء عبوات مخصصة تناسب متطلبات عملك، مما يضمن عملية شواء سلسة وفعالة\r\nفي مؤسستك', 'We understand the unique requirements of the foodservice industry. To meet your highvolume needs, we oĊer bulk orders of natural charcoal in 10kg and 20kg sizes in Bahrain and Saudi Arabia. Our team is ready to assist you in creating customized packages tailored to your business requirements, ensuring a smooth and eċcient grilling process\r\nat your establishment', 1, '2023-11-25 08:52:06', '2023-11-25 08:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `media_id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'مشويات غير شكل مع الفحم السداسي', 'Unshaped grills with hexagonal charcoal', 'Get ready for a shapeless grilling experience with Raheeb Hex Charcoal! Contact us via private message to order\r\n#Terrible _ Charcoal', '1- The value of the food deed in the endowments is 300 pounds.\r\n2- The food deed includes all kinds of donations, whether it is zakat money, charity, atonement, or a vow.\r\n3- The food instrument is used to provide meat for the most vulnerable families.\r\n4- The project comes after the success of the sacrificial sukuk project and its achievement of an unprecedented return.', 'https://www.youtube.com/watch?v=UlWWZeeJU20', 1, '2023-07-06 08:42:59', '2023-07-19 13:55:50'),
(6, 1, 'اطلاق  الموقع الالكتروني', 'Launching Our New Website', 'اطلقت شاركواليتي لتجارة الفحم🪨 الموقع الجديد', 'Charcoality Coal Trading 🪨 launched the new website', '/uploads/media/1689595498_4228.webp', 1, '2023-07-16 06:17:34', '2023-07-17 12:04:58'),
(7, 1, NULL, NULL, NULL, NULL, '/uploads/media/1689595535_7799.webp', 1, '2023-07-17 12:05:35', '2023-07-17 12:05:35'),
(8, 1, NULL, NULL, NULL, NULL, '/uploads/media/1689595540_4466.webp', 1, '2023-07-17 12:05:40', '2023-07-17 12:05:40'),
(9, 1, NULL, NULL, NULL, NULL, '/uploads/media/1689595545_7544.webp', 1, '2023-07-17 12:05:45', '2023-07-17 12:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `lines`
--

CREATE TABLE `lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lines`
--

INSERT INTO `lines` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Possimus voluptatem', 'Anim est vel quia d', 'Debitis quod fugit', 'Ad voluptatibus est', NULL, 'Quis nisi atque veni', 1, '2023-07-26 09:42:54', '2023-07-26 09:42:54'),
(2, 'Quas nisi ipsum lore', 'Molestias expedita d', 'Accusantium ut labor', 'Omnis laborum ipsum', NULL, 'Occaecat quia unde e', 1, '2023-07-26 09:42:58', '2023-07-26 09:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title_ar`, `title_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الصور', 'Images', 1, '2023-07-06 08:12:30', '2023-07-17 11:56:34'),
(2, 'الفيديوهات', 'Videos', 1, '2023-07-06 08:12:41', '2023-07-17 11:56:48');

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
(1, '2014_10_11_000000_create_Media_table', 1),
(2, '2014_10_11_000000_create_advertisements_table', 1),
(3, '2014_10_11_000000_create_blogs_table', 1),
(4, '2014_10_11_000000_create_companies_table', 1),
(5, '2014_10_11_000000_create_countries_table', 1),
(6, '2014_10_11_000000_create_lines_table', 1),
(7, '2014_10_11_000000_create_products_table', 1),
(8, '2014_10_11_000000_create_services_table', 1),
(9, '2014_10_11_000000_create_sliders_table', 1),
(10, '2014_10_11_000000_create_values_table', 1),
(11, '2014_10_12_000000_create_admins_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_04_18_080645_create_settings_table', 1),
(16, '2022_04_18_084603_create_contacts_table', 1),
(17, '2022_04_18_084626_create_f_a_q_s_table', 1),
(18, '2022_09_19_140023_create_visits_table', 1);

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
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الفحم الخشبي الصلب', 'HARD WOOD CHARCOAL', 'فحم الشواء', 'BBQ CHARCOAL', NULL, NULL, 1, '2023-07-26 09:37:26', '2023-07-26 09:37:26'),
(2, 'الفحم الحجري', 'SAWDUST CHARCOAL', NULL, NULL, NULL, NULL, 1, '2023-07-26 09:38:01', '2023-07-26 09:38:01'),
(3, 'قوالب الفحم', 'CHARCOAL BRIQUETTES', 'مكعبات مكعبات\r\nكتل سداسية', 'CUBE BRIQUETTES\r\nHEXAGONAL BRIQUETTES', NULL, NULL, 1, '2023-07-26 09:39:15', '2023-07-26 09:39:15'),
(4, 'الجذوع الخشبية', 'WOOD LOGS', NULL, NULL, NULL, NULL, 1, '2023-07-26 10:44:23', '2023-07-26 10:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'فحم طبيعي عالي الجودة', 'Premium Natural Quality Charcoal', NULL, NULL, NULL, NULL, 1, '2023-07-17 13:49:13', '2023-11-25 08:48:21'),
(2, 'تعزيز النكهة والراحة', 'Enhanced Flavor and Convenience', NULL, NULL, NULL, 'https://emcan-group.com/en/blogs', 1, '2023-07-17 13:49:31', '2023-11-25 08:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about_title_ar', 'قصتنا', 'about', 1, '2022-10-09 08:52:15', '2024-06-09 18:10:09'),
(2, 'about_title_en', 'Our Story', 'about', 1, '2022-10-09 08:52:15', '2024-06-09 18:10:09'),
(4, 'privacy_ar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'privacy', 1, '2022-10-09 08:52:15', '2023-07-19 10:35:25'),
(5, 'privacy_en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'privacy', 1, '2022-10-09 08:52:15', '2023-07-19 10:35:25'),
(6, 'privacy_image', '/uploads/Settings/1689762925_2326.webp', 'privacy', 1, '2022-10-09 08:52:15', '2023-07-19 10:35:27'),
(7, 'title_ar', 'شاركواليتي لتجارة الفحم', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(8, 'title_en', 'Charcoality Coal Trading', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(12, 'logo', '/uploads/Settings/1689594711_2851.webp', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-07-17 11:51:51'),
(13, 'email', 'sales@charcoality.com', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(14, 'phone', '97332070767', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(15, 'whatsapp', '97332070737', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(16, 'desc', 'Charcoality', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(17, 'keywords', 'Charcoality', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(18, 'author', 'Charcoality', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(25, 'mobile', '97338043804', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(40, 'about_display', '1', 'about', 1, '2022-10-09 08:52:15', '2024-06-09 18:10:09'),
(41, 'privacy_display', '1', 'privacy', 1, '2022-10-09 08:52:15', '2023-07-19 10:35:27'),
(42, 'terms_display', '1', 'terms', 1, '2022-10-09 08:52:15', '2023-07-19 10:37:21'),
(48, 'faq_ar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce', 'faq', 1, '2022-10-09 08:52:15', '2023-07-18 11:20:23'),
(49, 'faq_en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce', 'faq', 1, '2022-10-09 08:52:15', '2023-07-18 11:20:23'),
(50, 'faq_image', '/uploads/Settings/1689679203_4252.webp', 'faq', 1, '2022-10-09 08:52:15', '2023-07-18 11:20:03'),
(51, 'vision_ar', 'حتى هاربر موسكو ثم, وتقهقر المنتصرة حدة عل, التي فهرست واشتدّت أن أسر. كانت المتاخمة التغييرات أم وفي. ان وانتهاءً باستحداث قهر. ان ضمنها للأراضي الأوروبية ذات. حشد الثقيل المنتصر ثم, أسر قررت تم. وغير تصفح الحزب واستمر, مشروط الساحلية هذا ان. أما معركة لبلجيكا، من, الألوف الثقيلة الإنجليزية أسر ٣٠. ٣٠ دار أمام أحدث, أما بحشد الهادي الدولارات ما, هو الحزب الصفحة محاولات قبل. وبحلول الخنادق الأوروبية، ان غير, وليرتفع برلين، انه, انتباه الوزراء البولندي تم تلك.', 'vision', 1, '2022-10-09 08:52:15', '2023-07-09 08:58:51'),
(52, 'vision_en', 'Even Harper Moscow then, and the victorious retreat sharply on, which indexed and hardened to be captured. Adjacent changes were um and in. That and the end of the creation of oppression. Including European territories. The victorious heavy horde then, captured was decided. The non-surfing party goes on, coastal modal that\'s that. As for the Battle of Belgium, from the English heavy thousands captured 30. 30 House in front of the most recent, as for the quiet crowd of dollars, is the party page attempts before. And by the European trenches, that is, and Berlin rises, that, the attention of the Polish ministers has been those.', 'vision', 1, '2022-10-09 08:52:15', '2023-07-09 08:58:51'),
(53, 'vision_image', '/uploads/Settings/1688893131_4915.webp', 'vision', 1, '2022-10-09 08:52:15', '2023-07-09 08:58:52'),
(60, 'facebook', 'https://www.facebook.com/raheeb.coal?mibextid=LQQJ4d', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(61, 'twitter', 'https://twitter.com/Charcoality', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(62, 'instagram', 'https://instagram.com/raheeb.coal?igshid=NzZlODBkYWE4Ng==', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(63, 'snapchat', 'https://snapchat.com/Charcoality', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(65, 'address_ar', 'طريق 1203 ، الهملة ، البحرين', 'address', 1, '2022-10-09 08:52:15', '2023-07-17 12:42:12'),
(66, 'address_en', 'Road 1203،, Hamala, Bahrain', 'address', 1, '2022-10-09 08:52:15', '2023-07-17 12:42:12'),
(67, 'about_desc_ar', '<p>مرحبًا بكم في قلب شركة Charcoality، حيث يلتقي شغف الشواء مع فن صناعة الفحم. بدأت رحلتنا بشعلة إلهام بسيطة: إعادة تعريف تجربة الشواء وإشعال النكهة بشكل لم يسبق له مثيل.</p>\r\n\r\n<p>تأسست شركة Charcoality على يد فريق من عشاق الشواء المخضرمين، نتيجة حب مشترك للطهي في الهواء الطلق والرغبة في الارتقاء به إلى آفاق جديدة. مدعومًا بتفانينا الجماعي في الجودة والابتكار، شرعنا في مهمة صناعة أفضل منتجات الفحم التي من شأنها تحويل كل حفلة شواء إلى مغامرة طهي لا تُنسى.</p>\r\n\r\n<p>منذ البداية، شرعنا في صنع فحم يتجاوز المألوف. نحن نختار بدقة أجود أنواع الأخشاب الصلبة، والتي تم اختيارها بعناية لنقاوتها وخصائصها المعززة للنكهة. يمتد التزامنا بالتميز إلى كل خطوة من عملية التصنيع، حيث تكون الدقة والاهتمام بالتفاصيل أمرًا بالغ الأهمية.</p>\r\n\r\n<p>لكن الفحم هو أكثر من مجرد فحم، فهو شهادة على الحرفية والاستدامة والسعي لتحقيق الكمال. نحن نفخر بممارساتنا الصديقة للبيئة، ونقوم بتوريد موادنا بشكل مسؤول وتقليل النفايات لحماية البيئة التي نعتز بها.</p>\r\n\r\n<p>نحن نفهم أهمية المجتمع والتواصل. نحن ممتنون للغاية لثقة وولاء عملائنا، الذين يلهموننا لدفع حدود الذوق والإبداع كل يوم. معًا، نحن أكثر من مجرد شركة - نحن عائلة يجمعها شغف الطعام الرائع والتجارب المشتركة.</p>\r\n\r\n<p>في Charcoality، قصتنا لا تزال قيد الكتابة. نحن ندعوك للانضمام إلينا في هذه الرحلة بينما نواصل الابتكار والاستكشاف وإشعال شعلة الإلهام في كل فناء خلفي وفناء وشواية في جميع أنحاء العالم.</p>\r\n\r\n<p>شكرا لكونك جزءا من قصتنا. مرحبا بكم في عائلة الفحم. دعونا نشعل الشواية ونصنع الذكريات معًا.</p>', 'about', 1, '2022-10-09 08:52:15', '2024-06-09 18:10:09'),
(68, 'about_desc_en', '<p>Welcome to the heart of Charcoality, where passion for grilling meets the art of charcoal craftsmanship. Our journey began with a simple spark of inspiration: to redefine the grilling experience and ignite flavor like never before.</p>\r\n\r\n<p>Founded by a team of seasoned grill enthusiasts, Charcoality was born out of a shared love for outdoor cooking and a desire to elevate it to new heights. Fueled by our collective dedication to quality and innovation, we embarked on a mission to craft the finest charcoal products that would transform every barbecue into an unforgettable culinary adventure.</p>\r\n\r\n<p>From the very beginning, we set out to create charcoal that goes beyond the ordinary. We meticulously select the finest hardwoods, handpicked for their purity and flavor-enhancing properties. Our commitment to excellence extends to every step of the manufacturing process, where precision and attention to detail are paramount.</p>\r\n\r\n<p>But Charcoality is more than just charcoal&mdash;it&#39;s a testament to craftsmanship, sustainability, and the pursuit of perfection. We take pride in our eco-conscious practices, sourcing our materials responsibly and minimizing waste to protect the environment we cherish.</p>\r\n\r\n<p>We understand the importance of community and connection. We are deeply grateful for the trust and loyalty of our customers, who inspire us to push the boundaries of flavor and creativity every day. Together, we are more than just a company&mdash;we are a family united by a passion for great food and shared experiences.</p>\r\n\r\n<p>At Charcoality, our story is still being written. We invite you to join us on this journey as we continue to innovate, explore, and ignite the flame of inspiration in every backyard, patio, and grill across the world.</p>\r\n\r\n<p>Thank you for being a part of our story. Welcome to the Charcoality family. Let&#39;s light up the grill and make memories together.</p>', 'about', 1, '2022-10-09 08:52:15', '2024-06-09 18:10:09'),
(69, 'about_image', '/uploads/Settings/1689667222_1719.webp', 'about', 1, '2022-10-09 08:52:15', '2023-07-18 08:00:22'),
(71, 'what_we_have_title_ar', 'الجودة مهمة', 'what_we_have', 1, '2022-10-09 08:52:15', '2024-06-09 18:09:20'),
(72, 'what_we_have_title_en', 'The Quality Matters', 'what_we_have', 1, '2022-10-09 08:52:15', '2024-06-09 18:09:20'),
(73, 'what_we_have_desc_ar', '<p>1. مجموعة واسعة من خيارات الفحم الطبيعي</p>\r\n\r\n<p>2. أحجام مختلفة لتناسب متطلباتك</p>\r\n\r\n<p>3. الجودة والأداء المتميز</p>\r\n\r\n<p>4. تعزيز النكهة والراحة</p>\r\n\r\n<p>5. الثقة والموثوقية</p>\r\n\r\n<p>6. سهولة الطلب والتسليم السريع</p>\r\n\r\n<p>&nbsp;</p>', 'what_we_have', 1, '2022-10-09 08:52:15', '2024-06-09 18:09:20'),
(74, 'what_we_have_desc_en', '<p>1. A Wide Variety of Natural Charcoal Options</p>\r\n\r\n<p>2. Various Sizes to Suit Your Requirements</p>\r\n\r\n<p>3. Premium Quality and Performance</p>\r\n\r\n<p>4. Enhanced Flavor and Convenience</p>\r\n\r\n<p>5. Trust and Reliability</p>\r\n\r\n<p>6. Easy Ordering and Fast Delivery</p>', 'what_we_have', 1, '2022-10-09 08:52:15', '2024-06-09 18:09:20'),
(76, 'gallery_title_ar', 'الجودة مهمة', 'gallery', 1, '2022-10-09 08:52:15', '2023-07-18 09:06:03'),
(77, 'gallery_title_en', 'The Quality Matters', 'gallery', 1, '2022-10-09 08:52:15', '2023-07-18 09:06:03'),
(78, 'gallery_desc_ar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque cursus sit amet erat quis tempus. Donec laoreet pretium leo sit amet feugiat.\r\nSuspendisse egestas tincidunt sapien, sit amet mollis tortor rutrum ut. Duis sed placerat lectus, nec auctor massa. Nam lacinia, elit quis commodo pulvinar, est orci ultrices magna, vitae facilisis urna erat vitae ipsum.', 'gallery', 1, '2022-10-09 08:52:15', '2023-07-18 09:06:03'),
(79, 'gallery_desc_en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque cursus sit amet erat quis tempus. Donec laoreet pretium leo sit amet feugiat.\r\nSuspendisse egestas tincidunt sapien, sit amet mollis tortor rutrum ut. Duis sed placerat lectus, nec auctor massa. Nam lacinia, elit quis commodo pulvinar, est orci ultrices magna, vitae facilisis urna erat vitae ipsum.', 'gallery', 1, '2022-10-09 08:52:15', '2023-07-18 09:06:03'),
(81, 'terms_ar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'terms', 1, '2022-10-09 08:52:15', '2023-07-19 10:37:21'),
(82, 'terms_en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'terms', 1, '2022-10-09 08:52:15', '2023-07-19 10:37:21'),
(83, 'terms_image', '/uploads/Settings/1689763041_7648.webp', 'terms', 1, '2022-10-09 08:52:15', '2023-07-19 10:37:22'),
(84, 'why_choose_us_title_ar', 'الجودة مهمة', 'why_choose_us', 1, '2022-10-09 08:52:15', '2023-11-25 08:42:57'),
(85, 'why_choose_us_title_en', 'Our Charcoal', 'why_choose_us', 1, '2022-10-09 08:52:15', '2023-11-25 08:42:57'),
(86, 'why_choose_us_desc_ar', 'مع Charcoality، لا يمكنك أن تتوقع سوى الأفضل. فحم الرحيب لدينا هو\r\nتم تصميمه بعناية لضمان حرارة ثابتة وأوقات حرق أطول والحد الأدنى من الرماد\r\nإنتاج. نحن نفخر بتقديم الجودة الممتازة، مما يعزز نكهة المشويات الخاصة بك\r\nالأطباق، وجعل تجربة الطبخ الخاصة بك سهلة وممتعة', 'why_choose_us', 1, '2022-10-09 08:52:15', '2023-11-25 08:42:57'),
(87, 'why_choose_us_desc_en', 'With Charcoality, you can expect nothing but the best. Our Raheeb charcoal is\r\ncarefully crafted to ensure consistent heat, longer burning times, and minimal ash\r\nproduction. We take pride in delivering premium quality, enhancing the flavor of your grilled\r\ndishes, and making your cooking experience eĊortless and enjoyable', 'why_choose_us', 1, '2022-10-09 08:52:15', '2023-11-25 08:42:57'),
(88, 'video', 'https://www.youtube.com/watch?v=UlWWZeeJU20', 'publicSettings', 1, '2022-10-09 08:52:15', '2023-11-25 18:22:02'),
(89, 'mission_ar', 'في شاركواليتي ، مهمتنا هي تزويد الشوايات بأفضل منتجات الفحم التي تعزز قدراتهم\r\nتجربة الطبخ ورفع نكهات أطباقهم. ونحن نسعى جاهدين للابتكار المستمر و\r\nتحسين منتجاتنا، والتأكد من أنها تلبي أعلى معايير الجودة والأداء\r\nالاستدامة.', 'mission', 1, '2022-10-09 08:52:15', '2024-06-09 16:56:54'),
(90, 'mission_en', 'At Charcoality, our mission is to provide grillers with the finest charcoal products that enhance their\r\ncooking experience and elevate the flavors of their dishes. We strive to continuously innovate and\r\nimprove our products, ensuring that they meet the highest standards of quality, performance, and\r\nsustainability.', 'mission', 1, '2022-10-09 08:52:15', '2024-06-09 16:56:54'),
(91, 'mission_image', '/uploads/Settings/1690367120_5476.webp', 'mission', 1, '2022-10-09 08:52:15', '2023-07-26 10:25:20'),
(92, 'our_products_ar', '<p>تشتمل مجموعة منتجاتنا على مجموعة متنوعة من خيارات الفحم المصممة لتلبية الاحتياجات المتنوعة تفضيلات عملائنا. من الفحم الخشبي الصلب التقليدي إلى القوالب المريحة، كل منها تم تصميم منتج Charcoality بعناية لتوفير الحرارة المثالية والحرق طويل الأمد والنكهة اللذيذة.</p>', 'our_products', 1, '2022-10-09 08:52:15', '2024-06-09 18:33:37'),
(93, 'our_products_en', '<p>Our product range includes a variety of charcoal options designed to cater to the diverse needs and preferences of our customers. From traditional hardwood lump charcoal to convenient briquettes, each Charcoality product is carefully crafted to deliver optimal heat, long-lasting burn, and delicious flavor.</p>', 'our_products', 1, '2022-10-09 08:52:15', '2024-06-09 18:33:37'),
(94, 'our_products_image', '/uploads/Settings/1717958017_8921.webp', 'our_products', 1, '2022-10-09 08:52:15', '2024-06-09 18:33:37'),
(95, 'sustainability_ar', '<p>نحن ملتزمون بشدة بالاستدامة والممارسات الصديقة للبيئة. نحن نعطي الأولوية للمسؤولية طرق التوريد والإنتاج لتقليل تأثيرنا البيئي وتعزيز الحفاظ على البيئة جهود. يمتد التزامنا بالاستدامة من الغابة إلى الشواية، مما يضمن أن كل منتج من منتجات الفحم الذي تستخدمه أخلاقي وصديق للبيئة. هدفنا هو ترك أثر إيجابي على هذا الكوكب مع توفير منتجات استثنائية لعملائنا.</p>', 'sustainability', 1, '2022-10-09 08:52:15', '2024-06-09 18:32:38'),
(96, 'sustainability_en', '<p>We are deeply committed to sustainability and eco-conscious practices. We prioritize responsible sourcing and production methods to minimize our environmental impact and promote conservation efforts. Our dedication to sustainability extends from forest to grill, ensuring that every charcoal product you use is both ethical and environmentally friendly. Our goal is to leave a positive impact on the planet while providing exceptional products to our customers.</p>', 'sustainability', 1, '2022-10-09 08:52:15', '2024-06-09 18:32:38'),
(97, 'sustainability_image', '/uploads/Settings/1717957958_2119.webp', 'sustainability', 1, '2022-10-09 08:52:15', '2024-06-09 18:32:38'),
(98, 'join_us_ar', '<p>انضم إلينا في الرحلة للارتقاء بلعبة الشواء الخاصة بك وإشعال شغفك بالطهي في الهواء الطلق الفحمية. سواء كنت من عشاق الشواء في الفناء الخلفي، أو طاهيًا محترفًا، أو أي شيء في هذا المجال بين، نحن ندعوك لاكتشاف الفرق الذي يمكن أن يحدثه الفحم عالي الجودة في طهيك. مرحبًا بكم في عائلة Charcoality، حيث يحكي كل شعلة قصة وكل وجبة هي احتفال أو احتفال مفامرة.</p>', 'join_us', 1, '2022-10-09 08:52:15', '2024-06-09 18:38:15'),
(99, 'join_us_en', '<p>Join us on the journey to elevate your grilling game and ignite your passion for outdoor cooking with Charcoality. Whether you&#39;re a backyard barbecue enthusiast, a professional chef, or anything in between, we invite you to discover the difference that quality charcoal can make in your cooking. Welcome to the Charcoality family, where every flame tells a story and every meal is a celebration OR an adventure.</p>', 'join_us', 1, '2022-10-09 08:52:15', '2024-06-09 18:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `shetabit_visits`
--

CREATE TABLE `shetabit_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `request` mediumtext DEFAULT NULL,
  `url` mediumtext DEFAULT NULL,
  `referer` mediumtext DEFAULT NULL,
  `languages` text DEFAULT NULL,
  `useragent` text DEFAULT NULL,
  `headers` text DEFAULT NULL,
  `device` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `browser` text DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `visitable_type` varchar(255) DEFAULT NULL,
  `visitable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `visitor_type` varchar(255) DEFAULT NULL,
  `visitor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'مرحبًا بكم في Charcoality - رفيقك في الفحم الطبيعي!', 'Welcome to Charcoality - Your Natural Charcoal Companion!', 'اكتشف عالم الفحم الفاخر والطبيعي للشوي والطهي و\r\nأكثر!', 'Explore the world of premium and natural charcoal for grilling, cooking, and\r\nmore!', '/uploads/Sliders/1689599318_8273.webp', NULL, 1, '2023-07-17 13:08:38', '2023-11-25 08:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mostafazarea69@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'تأكيد الجودة', 'Quality Assurance', 'الجودة هي حجر الزاوية في عملنا في شاركواليتي . نحن نستورد أجود المواد الخام بدقة،\r\nالتأكد من أن كل قطعة من الفحم تلبي معاييرنا الصارمة للنقاء والأداء. تضمن مرافق التصنيع الحديثة لدينا وعمليات مراقبة الجودة الصارمة أن كل كيس من أكياسنا\r\nيقدم الفحم النباتي نتائج استثنائية، مرة تلو الأخرى.', 'Quality is the cornerstone of our business at Charcoality. We meticulously source the finest raw mterials,\r\nensuring that each piece of charcoal meets our strict standards for purity and performance. Our state-ofthe-art manufacturing facilities and rigorous quality control processes guarantee that every bag of\r\nCharcoality charcoal delivers exceptional results, time after time.', '/uploads/Values/1689600053_2773.webp', NULL, 1, '2023-07-17 13:20:53', '2024-06-09 18:12:34'),
(3, 'الاحترام', 'Respect', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque', '/uploads/Values/1689600077_6705.webp', NULL, 1, '2023-07-17 13:21:17', '2023-07-17 13:23:16'),
(4, 'الثقة', 'Trust', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue ipsum sed luctus interdum. Vestibulum est neque, tempus nec tincidunt ut, pellentesque eu nisi. Fusce accumsan felis odio, non sagittis lorem efficitur at. Quisque', '/uploads/Values/1689600105_8262.webp', NULL, 1, '2023-07-17 13:21:45', '2023-07-17 13:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_media_id_foreign` (`media_id`);

--
-- Indexes for table `lines`
--
ALTER TABLE `lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shetabit_visits_visitable_type_visitable_id_index` (`visitable_type`,`visitable_id`),
  ADD KEY `shetabit_visits_visitor_type_visitor_id_index` (`visitor_type`,`visitor_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lines`
--
ALTER TABLE `lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
