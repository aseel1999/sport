-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 يناير 2023 الساعة 08:36
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- بنية الجدول `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', ' إضافة ألبوم جديد', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-23 20:53:54', '2023-01-23 20:53:54'),
(2, 'interests', ' تعديل الألبوم', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-23 20:57:29', '2023-01-23 20:57:29'),
(3, 'images', ' تعديل الألبوم', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-23 20:58:07', '2023-01-23 20:58:07'),
(4, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-23 21:00:14', '2023-01-23 21:00:14'),
(5, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-23 21:00:15', '2023-01-23 21:00:15'),
(6, 'هىفثقثسف', ' تعديل الألبوم', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-24 05:22:10', '2023-01-24 05:22:10'),
(7, '8', ' إضافة تصنيف جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-24 05:24:46', '2023-01-24 05:24:46'),
(8, 'جد', ' تعديل التصنيف ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-24 05:25:01', '2023-01-24 05:25:01');

-- --------------------------------------------------------

--
-- بنية الجدول `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aseel', 'aseel@admin.com', '05978641', NULL, '$2y$10$3HGTi0J3vT7fEq1OosdMou8S0eP1pwLNPnzcuHyXBvWJxC1GhHgsK', NULL, NULL, 'active', '2023-01-20 22:28:37', NULL),
(2, 'moh', 'moh@gmail.com', '05769325', NULL, '$2y$10$3HGTi0J3vT7fEq1OosdMou8S0eP1pwLNPnzcuHyXBvWJxC1GhHgsK', NULL, NULL, 'not_active', '2023-01-21 19:28:57', '2023-01-21 19:30:48');

-- --------------------------------------------------------

--
-- بنية الجدول `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `albums`
--

INSERT INTO `albums` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-01-13 22:31:46', '2023-01-20 22:31:46'),
(2, '2023-01-23 15:31:35', '2023-01-23 15:31:35'),
(3, '2023-01-23 15:41:07', '2023-01-23 15:41:07'),
(4, '2023-01-23 15:41:20', '2023-01-23 15:41:20'),
(5, '2023-01-23 15:46:57', '2023-01-23 15:46:57'),
(6, '2023-01-23 15:49:17', '2023-01-23 15:49:17'),
(7, '2023-01-23 15:49:30', '2023-01-23 15:49:30'),
(8, '2023-01-23 15:58:49', '2023-01-23 15:58:49'),
(9, '2023-01-23 18:45:13', '2023-01-23 18:45:13'),
(10, '2023-01-23 18:50:36', '2023-01-23 18:50:36'),
(11, '2023-01-23 18:52:46', '2023-01-23 18:52:46'),
(12, '2023-01-23 19:04:19', '2023-01-23 19:04:19'),
(14, '2023-01-23 20:53:54', '2023-01-23 20:53:54');

-- --------------------------------------------------------

--
-- بنية الجدول `album_translations`
--

CREATE TABLE `album_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `name_album` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `album_translations`
--

INSERT INTO `album_translations` (`id`, `album_id`, `name_album`, `locale`, `created_at`, `updated_at`) VALUES
(1, 14, 'اهتمام', 'en', '2023-01-23 20:53:54', '2023-01-23 20:57:29'),
(2, 14, 'interests', 'ar', '2023-01-23 20:53:54', '2023-01-23 20:53:54'),
(3, 13, 'الصور', 'en', '2023-01-23 20:58:07', '2023-01-23 20:58:07'),
(4, 13, 'images', 'ar', '2023-01-23 20:58:07', '2023-01-23 20:58:07'),
(5, 12, 'اهتمام', 'en', '2023-01-24 05:22:10', '2023-01-24 05:22:10'),
(6, 12, 'هىفثقثسف', 'ar', '2023-01-24 05:22:10', '2023-01-24 05:22:10');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2023-01-20 22:30:52', '2023-01-20 22:30:52', NULL),
(2, '2023-01-21 19:31:08', '2023-01-21 19:31:08', NULL),
(3, '2023-01-21 19:33:27', '2023-01-21 19:33:27', NULL),
(4, '2023-01-21 19:41:45', '2023-01-21 19:41:45', NULL),
(5, '2023-01-21 19:43:55', '2023-01-21 19:43:55', NULL),
(6, '2023-01-21 20:04:06', '2023-01-21 20:04:06', NULL),
(7, '2023-01-21 20:06:15', '2023-01-21 20:06:15', NULL),
(8, '2023-01-24 05:24:46', '2023-01-24 05:25:12', '2023-01-24 05:25:12');

-- --------------------------------------------------------

--
-- بنية الجدول `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'local', '2023-01-20 22:31:10', '2023-01-20 22:31:10', NULL),
(2, 1, 'ar', 'محليات', '2023-01-20 22:32:06', '2023-01-20 22:32:06', NULL),
(3, 2, 'en', 'global', '2023-01-21 19:31:40', '2023-01-21 19:31:40', NULL),
(4, 2, 'ar', 'عالميات', '2023-01-21 19:32:29', '2023-01-21 19:32:29', NULL),
(5, 3, 'en', 'others', '2023-01-21 19:34:13', '2023-01-21 19:34:13', NULL),
(6, 3, 'ar', 'منوعات أخرى', '2023-01-21 19:35:11', '2023-01-21 19:35:11', NULL),
(7, 4, 'en', 'basketball', '2023-01-21 19:42:21', '2023-01-21 19:42:21', NULL),
(8, 4, 'ar', 'كرة طائرة', '2023-01-21 19:43:13', '2023-01-21 19:45:11', NULL),
(9, 5, 'en', 'volleyball', '2023-01-21 19:45:41', '2023-01-21 19:45:41', NULL),
(10, 5, 'ar', 'كرة سلة', '2023-01-21 19:46:34', '2023-01-21 19:46:34', NULL),
(11, 6, 'en', 'strong plays', '2023-01-21 20:04:21', '2023-01-21 20:04:21', NULL),
(12, 6, 'ar', 'ألعاب قوى', '2023-01-21 20:05:11', '2023-01-21 20:05:11', NULL),
(13, 7, 'en', 'hand ball', '2023-01-21 20:06:30', '2023-01-21 20:06:30', NULL),
(14, 7, 'ar', 'كرة يد', '2023-01-21 20:10:00', '2023-01-21 20:10:00', NULL),
(15, 8, 'en', 'new', '2023-01-24 05:24:46', '2023-01-24 05:24:46', NULL),
(16, 8, 'ar', 'جد', '2023-01-24 05:24:46', '2023-01-24 05:25:01', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `neww_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `detail_translations`
--

CREATE TABLE `detail_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_id` int(11) NOT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `infographics`
--

CREATE TABLE `infographics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `infographics`
--

INSERT INTO `infographics` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'n.png\r\n', '2023-01-23 18:47:29', '2023-01-23 18:47:29'),
(2, 'n.png', '2023-01-23 18:47:29', '2023-01-23 18:47:29'),
(3, 'n.png', '2023-01-23 18:48:53', '2023-01-23 18:48:53'),
(4, 'n.png', '2023-01-23 18:48:53', '2023-01-23 18:48:53');

-- --------------------------------------------------------

--
-- بنية الجدول `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `languages`
--

INSERT INTO `languages` (`id`, `lang`, `flag`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'en', '', NULL, NULL, NULL),
(2, 'ar', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `language_translation`
--

CREATE TABLE `language_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `language_translation`
--

INSERT INTO `language_translation` (`id`, `language_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'English', NULL, NULL, NULL),
(2, 1, 'ar', 'إنجليزي', NULL, NULL, NULL),
(3, 2, 'en', 'Arabic', NULL, NULL, NULL),
(4, 2, 'ar', 'عربي', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_02_05_120404_create_settings_table', 1),
(2, '2022_02_05_120430_create_setting_translations_table', 1),
(3, '2022_02_28_125336_create_category_translations_table', 1),
(4, '2022_03_04_115027_create_contacts_table', 1),
(5, '2022_03_06_072541_create_admin_roles_table', 1),
(6, '2022_03_06_072637_create_roles_table', 1),
(7, '2022_03_06_072708_create_permissions_table', 1),
(8, '2022_03_06_072813_create_permission_translations_table', 1),
(9, '2022_03_06_081530_create_role_translations_table', 1),
(10, '2022_03_06_081604_create_role_permissions_table', 1),
(11, '2022_03_20_132959_create_languages_table', 1),
(12, '2022_03_20_133027_create_language_translation_table', 1),
(13, '2022_05_24_063926_create_varification_codes_table', 1),
(14, '2022_07_24_073256_create_promo_codes_table', 1),
(15, '2022_08_07_080113_create_user_translations_table', 1),
(16, '2022_08_16_120915_create_promo_code_users_table', 1),
(17, '2022_08_19_000000_create_failed_jobs_table', 1),
(18, '2022_10_12_000000_create_users_table', 1),
(19, '2022_10_12_100000_create_password_resets_table', 1),
(20, '2022_12_26_201822_create_pages_table', 1),
(21, '2022_12_26_201850_create_page_translations_table', 1),
(22, '2022_12_29_094216_create_admins_table', 1),
(23, '2023_01_04_234000_add_deleted_at_to_users_table', 1),
(24, '2023_01_10_182141_create_categories_table', 1),
(25, '2023_01_18_110339_create_news_table', 1),
(26, '2023_01_18_110408_create_new_translations_table', 1),
(27, '2023_01_18_110717_create_albums_table', 1),
(28, '2023_01_18_110755_create_album_translations_table', 1),
(29, '2023_01_18_110821_create_videos_table', 1),
(30, '2023_01_18_110844_create_video_translations_table', 1),
(31, '2023_01_18_114523_create_neww_images_table', 1),
(32, '2023_01_20_232359_create_video_translations_table', 2),
(33, '2023_01_21_183958_create_new_translations_table', 3),
(34, '2023_01_21_184253_create_video_translations_table', 4),
(35, '2023_01_21_213716_create_new_categories_table', 5),
(36, '2023_01_22_113556_create_infographics_table', 6),
(37, '2023_01_22_113700_create_details_table', 6),
(38, '2023_01_22_115131_create_detail_translations_table', 6),
(39, '2023_01_22_122651_create_details_table', 7),
(40, '2023_01_23_210115_create_album_translations_table', 8),
(41, '2022_08_23_104309_create_activity_log_table', 9),
(42, '2023_01_23_224213_create_album_translations_table', 9);

-- --------------------------------------------------------

--
-- بنية الجدول `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_post` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `news`
--

INSERT INTO `news` (`id`, `image`, `is_post`, `created_at`, `updated_at`) VALUES
(1, 'big-n.png\r\n', 'yes', '2023-01-20 22:36:01', '2023-01-23 20:34:34'),
(2, '2U1QcRJYIpJNIcu93362551674509601_8017704.png', 'no', '2023-01-23 19:33:21', '2023-01-23 19:33:21'),
(3, '9w6hnU9YsiRm8Do55308701674509859_5121908.png', 'no', '2023-01-23 19:37:39', '2023-01-23 19:37:39'),
(4, 'CvHlbJIJMwcnHYg84835471674509937_4600666.png', 'no', '2023-01-23 19:38:57', '2023-01-23 19:38:57'),
(5, 'paPuB8Vwl7LAxH998533081674510140_1992832.png', 'no', '2023-01-23 19:42:20', '2023-01-23 19:42:20'),
(7, '3yL9O0jyeYrlMAb62583541674514814_6716695.png', 'no', '2023-01-23 21:00:14', '2023-01-23 21:00:14'),
(8, 'apsObcOz8ZX9J4w37417801674514815_8037478.png', 'no', '2023-01-23 21:00:15', '2023-01-23 21:00:15');

-- --------------------------------------------------------

--
-- بنية الجدول `neww_images`
--

CREATE TABLE `neww_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `neww_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `neww_images`
--

INSERT INTO `neww_images` (`id`, `neww_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'big-n.png', '2023-01-20 22:45:13', '2023-01-23 20:33:55'),
(2, 2, 'zn5sYdoL16745096013455645.jpg', '2023-01-23 19:33:22', '2023-01-23 19:33:22'),
(3, 3, '4u7GunuL16745098597782407.jpg', '2023-01-23 19:37:39', '2023-01-23 19:37:39'),
(4, 4, 'rrElUHr316745099374510789.jpg', '2023-01-23 19:38:57', '2023-01-23 19:38:57'),
(5, 5, 'tsTW8vGX16745101405336737.jpg', '2023-01-23 19:42:20', '2023-01-23 19:42:20'),
(6, 7, 'kbkCFaQe16745148149615545.jpg', '2023-01-23 21:00:14', '2023-01-23 21:00:14'),
(7, 8, 'UlP58x3B16745148156463255.jpg', '2023-01-23 21:00:15', '2023-01-23 21:00:15');

-- --------------------------------------------------------

--
-- بنية الجدول `new_categories`
--

CREATE TABLE `new_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `neww_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `new_categories`
--

INSERT INTO `new_categories` (`id`, `neww_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-01-21 21:51:56', '2023-01-21 21:51:56'),
(2, 1, 2, '2023-01-21 21:57:27', '2023-01-21 21:57:27'),
(3, 6, 2, NULL, NULL),
(4, 7, 2, NULL, NULL),
(5, 7, 4, NULL, NULL),
(6, 8, 2, NULL, NULL),
(7, 8, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `new_translations`
--

CREATE TABLE `new_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `neww_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `new_translations`
--

INSERT INTO `new_translations` (`id`, `neww_id`, `title`, `detail`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'Realmadried won against barsa', 'this was  the best win', 'en', '2023-01-21 18:43:46', '2023-01-21 18:43:46'),
(2, 1, 'فوز ريال مدريد على برشلونة', 'لقد كان فوز مستحق للريال', 'ar', '2023-01-21 18:45:52', '2023-01-21 18:45:52'),
(3, 2, 'ffffdddd', 'bbbbbb', 'en', '2023-01-23 19:33:21', '2023-01-23 19:33:21'),
(4, 2, 'هذه المقالة', 'وةةةةعليققيف', 'ar', '2023-01-23 19:33:21', '2023-01-23 19:33:21'),
(5, 3, 'fffffffffffffff', 'mmmm', 'en', '2023-01-23 19:37:39', '2023-01-23 19:37:39'),
(6, 3, 'هذه المقالة', 'لالالالا', 'ar', '2023-01-23 19:37:39', '2023-01-23 19:37:39'),
(7, 4, 'fffffffffffffff', 'mmmm', 'en', '2023-01-23 19:38:57', '2023-01-23 19:38:57'),
(8, 4, 'هذه المقالة', 'لالالالا', 'ar', '2023-01-23 19:38:57', '2023-01-23 19:38:57'),
(9, 5, 'fffffffffffffff', 'mmmm', 'en', '2023-01-23 19:42:20', '2023-01-23 19:42:20'),
(10, 5, 'هذه المقالة', 'لالالالا', 'ar', '2023-01-23 19:42:20', '2023-01-23 19:42:20'),
(11, 6, 'fffffffffffffff', 'mmmm', 'en', '2023-01-23 19:44:41', '2023-01-23 19:44:41'),
(12, 6, 'هذه المقالة', 'لالالالا', 'ar', '2023-01-23 19:44:41', '2023-01-23 19:44:41'),
(13, 7, 'mmjmjm', 'hhhhhh', 'en', '2023-01-23 21:00:14', '2023-01-23 21:00:14'),
(14, 7, 'ببببب', 'ىىىىى', 'ar', '2023-01-23 21:00:14', '2023-01-23 21:00:14'),
(15, 8, 'mmjmjm', 'hhhhhh', 'en', '2023-01-23 21:00:15', '2023-01-23 21:00:15'),
(16, 8, 'ببببب', 'ىىىىى', 'ar', '2023-01-23 21:00:15', '2023-01-23 21:00:15');

-- --------------------------------------------------------

--
-- بنية الجدول `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `pages`
--

INSERT INTO `pages` (`id`, `image`, `views`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image.png', 1, 'about-us', 'active', '2023-01-20 22:21:25', NULL, NULL),
(2, 'image.png', 1, 'privacy-policy', 'active', '2023-01-20 22:21:25', NULL, NULL),
(3, 'image.png', 1, 'terms-of-use', 'active', '2023-01-20 22:21:25', NULL, NULL),
(4, 'image.png', 1, 'return_policy_page', 'active', '2023-01-20 22:21:25', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'about us', 'description', NULL, NULL, NULL),
(2, 1, 'ar', 'من نحن', 'description', NULL, NULL, NULL),
(3, 2, 'en', 'privacy policy', 'description', NULL, NULL, NULL),
(4, 2, 'ar', 'سياسة الخصوصية', 'description', NULL, NULL, NULL),
(5, 3, 'en', 'terms of use', 'description', NULL, NULL, NULL),
(6, 3, 'ar', 'شروط الاستخدام', 'description', NULL, NULL, NULL),
(7, 4, 'en', 'return policy page', 'description', NULL, NULL, NULL),
(8, 4, 'ar', 'سياسة الارجاع', 'description', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `permissions`
--

INSERT INTO `permissions` (`id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admins-show', NULL, NULL, NULL),
(2, 'admins-create', NULL, NULL, NULL),
(3, 'admins-edit', NULL, NULL, NULL),
(4, 'admins-delete', NULL, NULL, NULL),
(5, 'videoes-show', NULL, NULL, NULL),
(6, 'videoes-create', NULL, NULL, NULL),
(7, 'videoes-edit', NULL, NULL, NULL),
(8, 'videoes-delete', NULL, NULL, NULL),
(9, 'categories-show', NULL, NULL, NULL),
(10, 'categories-create', NULL, NULL, NULL),
(11, 'categories-edit', NULL, NULL, NULL),
(12, 'categories-delete', NULL, NULL, NULL),
(13, 'news-show', NULL, NULL, NULL),
(14, 'news-create', NULL, NULL, NULL),
(15, 'news-edit', NULL, NULL, NULL),
(16, 'news-delete', NULL, NULL, NULL),
(17, 'albums-show', NULL, NULL, NULL),
(18, 'albums-create', NULL, NULL, NULL),
(19, 'albums-edit', NULL, NULL, NULL),
(20, 'albums-delete', NULL, NULL, NULL),
(21, 'roles-show', NULL, NULL, NULL),
(22, 'roles-create', NULL, NULL, NULL),
(23, 'roles-edit', NULL, NULL, NULL),
(24, 'roles-delete', NULL, NULL, NULL),
(25, 'contacts-show', NULL, NULL, NULL),
(26, 'contacts-edit', NULL, NULL, NULL),
(27, 'contacts-delete', NULL, NULL, NULL),
(28, 'pages-show', NULL, NULL, NULL),
(29, 'pages-edit', NULL, NULL, NULL),
(30, 'settings-show', NULL, NULL, NULL),
(31, 'settings-edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `permission_translations`
--

CREATE TABLE `permission_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` int(11) NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `permission_translations`
--

INSERT INTO `permission_translations` (`id`, `permission_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'admins-show', NULL, NULL, NULL),
(2, 1, 'ar', 'عرض المدراء', NULL, NULL, NULL),
(3, 2, 'en', 'admins-create', NULL, NULL, NULL),
(4, 2, 'ar', 'إضافة المدراء', NULL, NULL, NULL),
(5, 3, 'en', 'admins-edit', NULL, NULL, NULL),
(6, 3, 'ar', 'تعديل المدراء', NULL, NULL, NULL),
(7, 4, 'en', 'admins-delete', NULL, NULL, NULL),
(8, 4, 'ar', 'حذف المدراء', NULL, NULL, NULL),
(9, 5, 'en', 'videoes-show', NULL, NULL, NULL),
(10, 5, 'ar', 'عرض الفيديوهات', NULL, NULL, NULL),
(11, 5, 'en', 'videoes-create', NULL, NULL, NULL),
(12, 5, 'ar', 'اضافة الفيديوهات', NULL, NULL, NULL),
(13, 6, 'en', 'vdeoes-edit', NULL, NULL, NULL),
(14, 6, 'ar', 'تعديل الفيديوهات', NULL, NULL, NULL),
(15, 10, 'en', 'videoes-delete', NULL, NULL, NULL),
(16, 10, 'ar', 'حذف الفيديوهات', NULL, NULL, NULL),
(17, 7, 'en', 'categories-show', NULL, NULL, NULL),
(18, 7, 'ar', 'عرض التصنيفات', NULL, NULL, NULL),
(19, 8, 'en', 'categories-create', NULL, NULL, NULL),
(20, 8, 'ar', 'إضافة التصنيفات', NULL, NULL, NULL),
(21, 9, 'en', 'categories-edit', NULL, NULL, NULL),
(22, 9, 'ar', 'تعديل التصنيفات', NULL, NULL, NULL),
(23, 10, 'en', 'categories-delete', NULL, NULL, NULL),
(24, 10, 'ar', 'حذف التصنيفات', NULL, NULL, NULL),
(25, 11, 'en', 'news-show', NULL, NULL, NULL),
(26, 7, 'ar', 'عرض الأخبار', NULL, NULL, NULL),
(27, 8, 'en', 'news-create', NULL, NULL, NULL),
(28, 8, 'ar', 'اضافة ألاخبار', NULL, NULL, NULL),
(29, 9, 'en', 'news-edit', NULL, NULL, NULL),
(30, 9, 'ar', 'تعديل  الأخبار', NULL, NULL, NULL),
(31, 10, 'en', 'news-delete', NULL, NULL, NULL),
(32, 10, 'ar', 'حذف الأخبار', NULL, NULL, NULL),
(33, 10, 'en', 'albums-show', NULL, NULL, NULL),
(34, 10, 'ar', 'عرض الألبومات ', NULL, NULL, NULL),
(35, 10, 'en', 'albums-create', NULL, NULL, NULL),
(36, 10, 'ar', 'اضافة الألبومات ', NULL, NULL, NULL),
(37, 10, 'en', 'albums-edit', NULL, NULL, NULL),
(38, 10, 'ar', 'تعديل الألبومات', NULL, NULL, NULL),
(39, 10, 'en', 'albums-delete', NULL, NULL, NULL),
(40, 10, 'ar', 'حذف الأبومات', NULL, NULL, NULL),
(41, 16, 'en', 'roles-show', NULL, NULL, NULL),
(42, 16, 'ar', 'عرض المسميات الوظيفية', NULL, NULL, NULL),
(43, 17, 'en', 'roles-create', NULL, NULL, NULL),
(44, 17, 'ar', 'إضافة المسميات الوظيفية', NULL, NULL, NULL),
(45, 18, 'en', 'roles-edit', NULL, NULL, NULL),
(46, 18, 'ar', 'تعديل المسميات الوظيفية', NULL, NULL, NULL),
(47, 19, 'en', 'roles-delete', NULL, NULL, NULL),
(48, 19, 'ar', 'حذف المسميات الوظيفية', NULL, NULL, NULL),
(49, 11, 'en', 'contacts-show', NULL, NULL, NULL),
(50, 11, 'ar', 'عرض الرسائل', NULL, NULL, NULL),
(51, 12, 'en', 'contacts-edit', NULL, NULL, NULL),
(52, 12, 'ar', 'تعديل الرسائل', NULL, NULL, NULL),
(53, 13, 'en', 'contacts-delete', NULL, NULL, NULL),
(54, 13, 'ar', 'حذف الرسائل', NULL, NULL, NULL),
(55, 14, 'en', 'pages-show', NULL, NULL, NULL),
(56, 14, 'ar', 'عرض الصفحات', NULL, NULL, NULL),
(57, 15, 'en', 'pages-edit', NULL, NULL, NULL),
(58, 15, 'ar', 'تعديل الصفحات', NULL, NULL, NULL),
(59, 20, 'en', 'settings-show', NULL, NULL, NULL),
(60, 20, 'ar', 'عرض الإعدادات', NULL, NULL, NULL),
(61, 21, 'en', 'settings-edit', NULL, NULL, NULL),
(62, 21, 'ar', 'تعديل الإعدادات', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `max_usage` int(11) DEFAULT NULL,
  `count_usage` int(11) NOT NULL DEFAULT 0,
  `end_date` date NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT '0->all restaurants',
  `discount_type` int(11) NOT NULL COMMENT '0->percentage , 1->amount',
  `status` enum('active','not_active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `promo_code_users`
--

CREATE TABLE `promo_code_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promo_code_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '2023-01-24 05:20:16', '2023-01-24 05:20:16', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `role_translations`
--

CREATE TABLE `role_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `role_translations`
--

INSERT INTO `role_translations` (`id`, `role_id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'en', 'hhh', '2023-01-24 05:20:16', '2023-01-24 05:20:16', NULL),
(2, 1, 'ar', 'تاا', '2023-01-24 05:20:16', '2023-01-24 05:20:16', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paginateTotal` int(11) NOT NULL,
  `login_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_play_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_store_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_maintenance_mode` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `is_allow_register` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `is_allow_login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `urls` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `paginateTotal`, `login_image`, `google_play_url`, `app_store_url`, `app_logo`, `info_email`, `mobile`, `facebook`, `twitter`, `instagram`, `about`, `whatsapp`, `is_maintenance_mode`, `is_allow_register`, `is_allow_login`, `urls`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 20, '', 'wwwwwww', 'pppppppppp', '', '', '', '', '', '', '', '', '1', '1', '1', '', '2023-01-20 22:47:48', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `user_translations`
--

CREATE TABLE `user_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `varification_codes`
--

CREATE TABLE `varification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `videos`
--

INSERT INTO `videos` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-01-20 22:32:54', '2023-01-20 22:32:54'),
(2, '2023-01-23 15:25:34', '2023-01-23 15:25:34'),
(3, '2023-01-23 15:26:59', '2023-01-23 15:26:59'),
(4, '2023-01-23 15:30:33', '2023-01-23 15:30:33'),
(5, '2023-01-23 19:12:08', '2023-01-23 19:12:08'),
(6, '2023-01-23 19:19:45', '2023-01-23 19:19:45'),
(7, '2023-01-23 19:20:27', '2023-01-23 19:20:27');

-- --------------------------------------------------------

--
-- بنية الجدول `video_translations`
--

CREATE TABLE `video_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` int(11) NOT NULL,
  `name_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `video_translations`
--

INSERT INTO `video_translations` (`id`, `video_id`, `name_video`, `url`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'ronaldo goals', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-23 19:10:37', '2023-01-23 19:10:37'),
(2, 1, 'أهداف رونالدو', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-23 19:10:37', '2023-01-23 19:17:10'),
(3, 2, 'matches ', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-23 19:12:55', '2023-01-23 19:44:36'),
(4, 2, 'مباريات', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-23 19:12:55', '2023-01-23 19:44:49'),
(5, 3, 'goals', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-23 19:14:44', '2023-01-23 19:43:48'),
(6, 3, 'اهداف الدون', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-23 19:15:27', '2023-01-23 19:16:24'),
(7, 6, 'vvvvv', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-23 19:19:45', '2023-01-23 19:19:45'),
(8, 6, 'أهداف', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-23 19:19:45', '2023-01-23 19:19:45'),
(9, 7, 'vvvvv', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-23 19:20:27', '2023-01-23 19:20:27'),
(10, 7, 'هدف', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-23 19:20:27', '2023-01-24 05:21:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_translations`
--
ALTER TABLE `album_translations`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_translations`
--
ALTER TABLE `detail_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infographics`
--
ALTER TABLE `infographics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_translation`
--
ALTER TABLE `language_translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neww_images`
--
ALTER TABLE `neww_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_categories`
--
ALTER TABLE `new_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_translations`
--
ALTER TABLE `new_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_code_users`
--
ALTER TABLE `promo_code_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_translations`
--
ALTER TABLE `role_translations`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_translations`
--
ALTER TABLE `user_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varification_codes`
--
ALTER TABLE `varification_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_translations`
--
ALTER TABLE `video_translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `album_translations`
--
ALTER TABLE `album_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_translations`
--
ALTER TABLE `detail_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infographics`
--
ALTER TABLE `infographics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language_translation`
--
ALTER TABLE `language_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `neww_images`
--
ALTER TABLE `neww_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `new_categories`
--
ALTER TABLE `new_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `new_translations`
--
ALTER TABLE `new_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permission_translations`
--
ALTER TABLE `permission_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_code_users`
--
ALTER TABLE `promo_code_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_translations`
--
ALTER TABLE `role_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_translations`
--
ALTER TABLE `user_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varification_codes`
--
ALTER TABLE `varification_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video_translations`
--
ALTER TABLE `video_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
