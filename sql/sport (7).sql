-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 فبراير 2023 الساعة 20:45
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
(8, 'جد', ' تعديل التصنيف ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-24 05:25:01', '2023-01-24 05:25:01'),
(9, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-25 21:04:32', '2023-01-25 21:04:32'),
(10, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 06:36:37', '2023-01-26 06:36:37'),
(11, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 06:47:03', '2023-01-26 06:47:03'),
(12, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 08:28:50', '2023-01-26 08:28:50'),
(13, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 08:29:41', '2023-01-26 08:29:41'),
(14, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 08:30:33', '2023-01-26 08:30:33'),
(15, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 10:19:36', '2023-01-26 10:19:36'),
(16, 'أخبار عربية', ' تعديل التصنيف ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-26 10:55:11', '2023-01-26 10:55:11'),
(17, 'default', ' إضافة رأي جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-28 21:08:58', '2023-01-28 21:08:58'),
(18, 'default', ' إضافة فيديو جديد', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-29 07:52:03', '2023-01-29 07:52:03'),
(19, 'ألعاب قوى', ' تعديل الرياضة ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-01-31 05:46:18', '2023-01-31 05:46:18'),
(20, '1', ' تعديل الاعلان ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 06:28:46', '2023-02-02 06:28:46'),
(21, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 10:57:58', '2023-02-02 10:57:58'),
(22, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 11:33:01', '2023-02-02 11:33:01'),
(23, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 11:33:42', '2023-02-02 11:33:42'),
(24, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 11:34:18', '2023-02-02 11:34:18'),
(25, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 11:34:57', '2023-02-02 11:34:57'),
(26, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 11:35:32', '2023-02-02 11:35:32'),
(27, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 20:13:39', '2023-02-02 20:13:39'),
(28, 'default', ' إضافة رأي جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 20:16:01', '2023-02-02 20:16:01'),
(29, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 20:38:27', '2023-02-02 20:38:27'),
(30, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 20:39:00', '2023-02-02 20:39:00'),
(31, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-02 20:39:46', '2023-02-02 20:39:46'),
(32, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-03 16:48:42', '2023-02-03 16:48:42'),
(33, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-06 17:57:06', '2023-02-06 17:57:06'),
(34, 'default', ' إضافة رأي جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-06 17:58:21', '2023-02-06 17:58:21'),
(35, 'default', ' إضافة خبر جديد ', NULL, NULL, 'App\\Models\\Admin', 1, '[]', '2023-02-08 17:06:16', '2023-02-08 17:06:16');

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
-- بنية الجدول `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_post` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `views` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `articles`
--

INSERT INTO `articles` (`id`, `image`, `is_post`, `created_at`, `updated_at`, `views`, `sport_id`, `category_id`) VALUES
(17, '0W3qS2hd1QF14Wn17990251675342677_5862629.png', 'yes', '2023-02-02 10:57:58', '2023-02-08 17:18:27', 13, 1, 1),
(18, '2yEqU6JRIGOTN2X21691741675344781_2045835.png', 'yes', '2023-02-02 11:33:01', '2023-02-06 18:33:34', 6, 2, 2),
(19, '0baBdL0L0MeruUI48431361675344821_3795725.png', 'yes', '2023-02-02 11:33:41', '2023-02-06 18:10:33', 8, 3, 3),
(20, '6H7grtq7JO992Sh74150921675344858_2481946.png', 'yes', '2023-02-02 11:34:18', '2023-02-06 18:33:55', 10, 4, 3),
(21, 'DP4yGT0pbGncVHi51486531675344896_7675488.png', 'yes', '2023-02-02 11:34:57', '2023-02-06 18:01:41', 9, 5, 1),
(22, 'lcQ2w6fuReMeTvN30380621675344931_6993654.png', 'yes', '2023-02-02 11:35:31', '2023-02-02 20:48:04', 4, 1, 1),
(23, 'B0nujFM94lFNsKs96437961675376249_4301075.png', 'yes', '2023-02-02 20:13:38', '2023-02-02 20:17:29', 0, 4, 2),
(24, 'hXcHj0CPdp1g2jt81789241675377506_1871811.png', 'no', '2023-02-02 20:38:27', '2023-02-05 09:07:27', 0, 3, 2),
(25, 'hFS7s7Y8bEnyzhP60551801675377539_8578965.png', 'yes', '2023-02-02 20:38:59', '2023-02-02 20:38:59', 0, 3, 1),
(26, 'lMpOSD7kNpZuLiS41451021675586844_4878329.jfif', 'no', '2023-02-02 20:39:46', '2023-02-06 18:00:47', 1, 3, 1),
(27, 'IOoURyP8j8UD0IV89671931675587990_3033989.png', 'yes', '2023-02-03 16:48:42', '2023-02-06 18:06:19', 5, 3, 2),
(28, 'adPGbvfaPwp1hgl72233531675713468_2185948.png', 'yes', '2023-02-06 17:57:06', '2023-02-06 18:21:23', 4, 3, 2),
(29, 'pNXLXaCZtddOoqF85786071675883174_3247119.jfif', 'yes', '2023-02-08 17:06:15', '2023-02-08 17:44:46', 1, 5, 2);

-- --------------------------------------------------------

--
-- بنية الجدول `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `article_categories`
--

INSERT INTO `article_categories` (`id`, `category_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-01-26 10:18:56', '2023-01-26 10:18:56'),
(2, 2, 1, '2023-01-26 10:18:56', '2023-01-26 10:18:56'),
(3, 3, 1, '2023-01-26 10:19:23', '2023-01-26 10:19:23'),
(4, 1, 2, '2023-01-26 10:19:49', '2023-01-26 10:19:49'),
(5, 4, 2, '2023-01-26 10:20:08', '2023-01-26 10:20:08'),
(6, 3, 2, '2023-01-26 10:20:28', '2023-01-26 10:20:28'),
(7, 2, 2, '2023-01-26 10:20:45', '2023-01-26 10:20:45'),
(8, 4, 1, '2023-01-26 10:21:14', '2023-01-26 10:21:14'),
(9, 1, 3, NULL, NULL),
(10, 2, 3, NULL, NULL),
(11, 3, 3, NULL, NULL),
(12, 4, 3, NULL, NULL),
(13, 1, 4, NULL, NULL),
(14, 4, 4, NULL, NULL),
(15, 2, 5, NULL, NULL),
(16, 4, 5, NULL, NULL),
(17, 2, 6, '2023-01-26 12:33:50', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `article_images`
--

CREATE TABLE `article_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `object_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `article_images`
--

INSERT INTO `article_images` (`id`, `article_id`, `object_type`, `object_id`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 27, 'App\\Models\\Article', 27, 'news/apnBETNp16755864023869693.jpg', 'apnBETNp16755864023869693.jpg', '2023-02-05 06:40:02', '2023-02-05 08:45:35'),
(2, 26, 'App\\Models\\Article', 26, 'news/aO9AnPET16755868458435149.jpg', 'aO9AnPET16755868458435149.jpg', '2023-02-05 06:47:25', '2023-02-05 06:47:25'),
(4, 27, 'App\\Models\\Article', 27, 'news/IG7RbzXn16755879908875556.jpg', 'IG7RbzXn16755879908875556.jpg', '2023-02-05 07:06:31', '2023-02-05 07:06:31'),
(5, 28, 'App\\Models\\Article', 28, 'news/AHOKg5WN16757134684665375.jpg', 'AHOKg5WN16757134684665375.jpg', '2023-02-06 17:57:48', '2023-02-06 17:57:48'),
(6, 29, 'App\\Models\\Article', 29, 'news/IEuBI4Bj16758831756527514.jpg', 'IEuBI4Bj16758831756527514.jpg', '2023-02-08 17:06:16', '2023-02-08 17:06:16');

-- --------------------------------------------------------

--
-- بنية الجدول `article_translations`
--

CREATE TABLE `article_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `article_translations`
--

INSERT INTO `article_translations` (`id`, `article_id`, `title`, `detail`, `locale`, `created_at`, `updated_at`, `subtitle`) VALUES
(1, 1, 'Ronaldoooos Gooooals', 'ronaaaaaaaaaaaldddddddddoooooooogoaaaaaaaaaals in reaaaaaaaaal maaaaaadrieeeed', 'en', '2023-01-26 10:22:48', '2023-01-26 10:22:48', ''),
(2, 1, 'أهداف رونالدو في ريال مدريد', 'رونالدوووووووووجوووووووووووووووووووول في رياااااااااااال مدرييييييييييييييييييييييد', 'ar', '2023-01-26 10:22:48', '2023-01-26 10:22:48', ''),
(3, 2, 'Matches', 'maaaaaaaaaaaaaatcheeeeeeeeesin teleeeeeeeeevision', 'en', '2023-01-26 10:25:01', '2023-01-29 09:27:17', 'mmmmmmmmmmmm'),
(4, 2, 'مبارياااااااااااااااااااات كأس العالم', 'مباريااااااااااااااااااات في قطر', 'ar', '2023-01-26 10:25:47', '2023-01-29 09:27:17', 'المنتخب'),
(5, 3, 'fffffffffffffff', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'en', '2023-01-26 08:28:50', '2023-01-26 08:28:50', ''),
(6, 3, 'هذه المقالة', 'لالالالالالالالالالالالالالالالالالالالالالا', 'ar', '2023-01-26 08:28:50', '2023-01-26 08:28:50', ''),
(7, 4, 'hhhhh', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'en', '2023-01-26 08:29:41', '2023-01-26 08:29:41', ''),
(8, 4, 'هذه الفئة', 'نعععععععععععععععععععععععععممممممممممممممممممممم', 'ar', '2023-01-26 08:29:41', '2023-01-26 08:29:41', ''),
(9, 5, 'mmmmmmmmmmmm', 'coooooooooorooooooooooooooooonaaaaaaa', 'en', '2023-01-26 08:30:32', '2023-01-26 08:30:32', ''),
(10, 5, 'ببببب', 'كووووووووووووولاروووووووووووووووووووناااااااااااااااا', 'ar', '2023-01-26 08:30:32', '2023-01-26 08:30:32', ''),
(11, 6, 'records', 'cccccccccccccccc', 'en', '2023-01-26 10:19:36', '2023-01-26 10:19:36', ''),
(12, 6, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'ar', '2023-01-26 10:19:36', '2023-01-26 10:19:36', ''),
(13, 7, 'ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaal', 'en', '2023-01-28 14:57:35', '2023-01-28 14:57:35', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal'),
(14, 7, 'أهدااااااااااااااااااااف رونالدووووووووووووووووووووو', 'أهدااااااااااااااف رونالدووووووووووو\r\nووووووووووووووووووووووووووووووووووووبنزييييييييييييمااااااااااااااااو\r\nريالللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللل\r\nييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييي\r\nتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتسسسسسسسسسسسسسسسسسسسسسسسسس\r\nشششششششششششششششششششششششششششششش', 'ar', '2023-01-28 14:57:35', '2023-01-28 14:57:35', 'أهدااااااااااااااااااااااااااااااااااااااااااف روناااااااااااااااااااااااااااااااااااااااااااااااالدووووووووووووووووووو'),
(15, 8, 'ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaal', 'en', '2023-01-28 14:57:35', '2023-01-28 15:02:19', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal'),
(16, 8, 'أهدااااااااااااااااااااف رونالدووووووووووووووووووووو', 'أهدااااااااااااااف رونالدوووووووووووووووووووووووووووووووووووووووووووووووبنزييييييييييييمااااااااااااااااوريالللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللليييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييييتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتسسسسسسسسسسسسسسسسسسسسسسسسسشششششششششششششششششششششششششششششش', 'ar', '2023-01-28 14:57:35', '2023-01-29 09:25:18', 'أهدااااااااااااااااااااااااااااااااااااااااااف روناااااااااااااااااااااااااااااااااااااااااااااااالدووووووووووووووووووو'),
(17, 9, 'ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaalvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'en', '2023-01-28 15:02:32', '2023-01-28 15:02:32', 'ronaldoooooooooo goaaaaaaaaaaal'),
(18, 9, 'أهدااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااف', 'أهدااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااف المبارييييييييييييييييييييييييييييييييييييييييييييياااااااااااااااااااااااااااااااااااااااااااااااتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت', 'شق', '2023-01-28 15:02:32', '2023-01-28 15:05:06', 'أهدااااااااااااااااااااااااااااااففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففف'),
(19, 10, 'ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaalvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'en', '2023-01-28 15:02:32', '2023-01-28 15:05:13', 'ronaldoooooooooo goaaaaaaaaaaal'),
(20, 10, 'أهدااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااف', 'أهدااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااااف المبارييييييييييييييييييييييييييييييييييييييييييييياااااااااااااااااااااااااااااااااااااااااااااااتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت', 'شق', '2023-01-28 15:02:32', '2023-01-28 15:05:17', 'أهدااااااااااااااااااااااااااااااففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففففف'),
(21, 11, 'medddddddddddddddeciiiiiiiiiiiiine', 'mmmmmmmmmmmmmmmmmmmmmmmmmmeeeeeeeeeeeeeeddddddddddddddddddddddddddddddddddddddcccccccccccccccinnnnnnnnnnnnnnnnnnneeeeeeeee', 'en', '2023-01-28 15:05:28', '2023-01-28 15:05:28', 'mmmmmmmmmmmmmmmmmmmmmmmmeeeeeeeeedddddddddddd'),
(22, 11, 'حذّرت شركة الأدوية الأمريكية', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:05:28', '2023-01-28 15:05:28', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية'),
(23, 12, 'medddddddddddddddeciiiiiiiiiiiiine', 'mmmmmmmmmmmmmmmmmmmmmmmmmmeeeeeeeeeeeeeeddddddddddddddddddddddddddddddddddddddcccccccccccccccinnnnnnnnnnnnnnnnnnneeeeeeeee', 'en', '2023-01-28 15:05:28', '2023-01-28 15:09:03', 'mmmmmmmmmmmmmmmmmmmmmmmmeeeeeeeeedddddddddddd'),
(24, 12, 'حذّرت شركة الأدوية الأمريكية', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:05:28', '2023-01-28 15:09:11', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية'),
(25, 13, 'mmmmmmmmmw2wjdkmmmmmmmmmmmmmmfhvjfjmvvm', 'nnnnnnnnnnnnnnnnnnnnnnnnffffffffffffffffjjjjjjjjjjjjjjjjjjjjjjjjjjjfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'en', '2023-01-28 15:09:27', '2023-01-28 15:09:27', 'mmmmmmmmmmmmmmmmmmmeeeeeeeeeeeeeeeebbbbbbbb'),
(26, 13, 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:09:27', '2023-01-28 15:09:27', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية'),
(27, 14, 'mmmmmmmmmw2wjdkmmmmmmmmmmmmmmfhvjfjmvvm', 'nnnnnnnnnnnnnnnnnnnnnnnnffffffffffffffffjjjjjjjjjjjjjjjjjjjjjjjjjjjfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'en', '2023-01-28 15:09:27', '2023-01-28 15:16:39', 'mmmmmmmmmmmmmmmmmmmeeeeeeeeeeeeeeeebbbbbbbb'),
(28, 14, 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:09:27', '2023-01-28 15:16:51', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية'),
(29, 15, 'حذّرت شركة الأدوية الأمريكية........', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:12:47', '2023-01-28 15:17:21', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية'),
(30, 15, 'mmmmmmmmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmmmmnnnnnnnnnnnnnnncccccccccccccccccccccccccccccffffffffffffffffwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'en', '2023-01-28 15:13:51', '2023-01-28 15:17:33', 'vvvvvvvvvvvvvvvvvvvvvffffffffffffffffffffffffffddddddddddddddddddd'),
(31, 16, 'حذّرت شركة الأدوية الأمريكية.......', 'حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةر حذّرت شركة الأدوية الأمريكيةحذّرت شركة الأدوية الأمريكيةر حذّرت شركة الأدوية الأمريكية', 'ar', '2023-01-28 15:13:51', '2023-01-28 15:17:44', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية'),
(32, 16, 'mmmmmmmmmmmmmmmmmmmmmmm', 'mmmmmmmmmmmmmmmmmmmmmmmnnnnnnnnnnnnnnncccccccccccccccccccccccccccccffffffffffffffffwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'en', '2023-01-28 15:13:51', '2023-01-28 15:17:55', 'vvvvvvvvvvvvvvvvvvvvvffffffffffffffffffffffffffddddddddddddddddddd'),
(34, 10, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'وووووووووووووووووووووو', 'ar', '2023-01-29 09:24:03', '2023-01-29 09:24:03', 'المنتخب'),
(35, 17, 'هذه المقالة', 'ىىىىىىىىىىىىىىىىىىىىىىىىىى', 'ar', '2023-02-02 10:57:58', '2023-02-02 10:57:58', 'المنتخب'),
(36, 18, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'لالالالالالالالالالالالالالالالالالالالالالالالالالالالالالالالالا', 'ar', '2023-02-02 11:33:01', '2023-02-02 11:33:01', 'المنتخب'),
(37, 19, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'بببببببببببببببببببببببببببببببببب', 'ar', '2023-02-02 11:33:41', '2023-02-02 11:33:41', 'المنتخب'),
(38, 20, 'هذه الفئة', 'ررررررررررررررررررررررررررررررررررررررررررررررررررررررررررررررر', 'ar', '2023-02-02 11:34:18', '2023-02-02 11:34:18', 'المنتخب'),
(39, 21, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'ؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤؤ', 'ar', '2023-02-02 11:34:57', '2023-02-02 11:34:57', 'المنتخب'),
(40, 22, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'سسسسسسسسسسسسسسسسسسسسسسسسس', 'ar', '2023-02-02 11:35:31', '2023-02-02 11:35:31', 'المنتخب'),
(41, 23, 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'رررررررررررر', 'ar', '2023-02-02 20:13:38', '2023-02-02 20:13:38', 'المنتخب'),
(42, 24, 'خلللللل', 'لللللللللللللللللللللللللللللل', 'ar', '2023-02-02 20:38:27', '2023-02-02 20:38:27', 'المنتخب'),
(43, 25, 'ببببببببببببب', 'رررررررررررررررررررررررر', 'ar', '2023-02-02 20:38:59', '2023-02-02 20:38:59', 'المنتخب'),
(44, 26, 'خلللللل', '<p>ررررررررررررررررررررررررررررررررررر</p>', 'ar', '2023-02-02 20:39:46', '2023-02-05 06:47:25', 'المنتخب'),
(45, 27, 'يتبع لتصنيف العالمي', '<p>تتتتتتتتتتتتتتتتتتتتتتتتتتتتتتللللللللللللللللل</p>', 'ar', '2023-02-03 16:48:42', '2023-02-04 19:06:20', 'المنتخب'),
(46, 28, 'هذه الفئة', '<p>لالالالالالالالالالالالالالالالالالالالالالا</p>', 'ar', '2023-02-06 17:57:06', '2023-02-06 17:57:06', 'واحد'),
(47, 29, 'مواجهة ريال مدريد و الأهلي', '<p>فوز ريال مدريد على الاهلي المصري&nbsp;</p>', 'ar', '2023-02-08 17:06:15', '2023-02-08 17:07:02', 'الفوز للريال');

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
(3, '2023-01-21 19:33:27', '2023-01-21 19:33:27', NULL);

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
(4, 2, 'ar', 'أخبار عالمية ودولية', '2023-01-21 19:32:29', '2023-01-25 14:18:22', NULL),
(5, 3, 'en', 'local news', '2023-01-21 19:34:13', '2023-01-25 14:20:04', NULL),
(6, 3, 'ar', 'أخبار عربية', '2023-01-21 19:35:11', '2023-01-26 10:55:11', NULL);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 'aseel', 'aseelmaysoum@gmail.com', '05974123', 'sssssssssss', 'ssssssssssssssssssssssssssssssssss', '2023-01-30 19:22:36', '2023-01-30 19:22:36');

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
(1, 'en', '', NULL, NULL, '2023-02-15 12:45:41'),
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
(42, '2023_01_23_224213_create_album_translations_table', 9),
(43, '2023_01_25_174748_add_views_to_news_table', 10),
(44, '2023_01_25_202721_create_settings_table', 11),
(45, '2023_01_26_084303_create_new_categories_table', 12),
(46, '2023_01_26_090501_add_new_id_to_new_translations_table', 13),
(47, '2023_01_26_091423_add_new_id_to_neww_images_table', 14),
(48, '2023_01_18_110339_create_articles_table', 15),
(49, '2023_01_18_114523_create_article_images_table', 15),
(50, '2023_01_21_183958_create_article_translations_table', 15),
(51, '2023_01_25_174748_add_views_to_articles_table', 15),
(52, '2023_01_26_084303_create_article_categories_table', 15),
(53, '2023_01_26_133542_create_sports_table', 16),
(54, '2023_01_27_191349_add_sport_id_to_articles_table', 16),
(55, '2023_01_27_191525_add_category_id_to_articles_table', 16),
(56, '2023_01_27_191908_create_sport_translations_table', 16),
(57, '2023_01_27_192322_create_opinions_table', 16),
(58, '2023_01_27_192407_create_opinion_translations_table', 16),
(59, '2023_01_27_193038_add_subtitle_to_article_translations_table', 16),
(60, '2023_01_27_201536_add_image_to_video_translations_table', 16),
(61, '2023_01_28_181837_add_image_to_videos_table', 17),
(62, '2023_01_28_202522_create_opinion_translations_table', 18),
(63, '2023_01_28_205637_create_opinion_translations_table', 19),
(64, '2023_01_28_230641_add_locale_to_opinion_translations_table', 20),
(65, '2023_01_30_044810_create_contact_translations_table', 21),
(66, '2023_01_30_045904_create_terms_table', 21),
(67, '2023_01_30_045945_create_term_translations_table', 21),
(68, '2023_01_30_193716_create_contacts_table', 21),
(69, '2023_01_30_212002_create_contacts_table', 22),
(70, '2023_01_31_074801_add_locale_to_sport_translations_table', 23),
(71, '2023_02_05_083259_create_article_images_table', 24),
(72, '2023_02_05_110716_create_settings_table', 25),
(73, '2023_02_06_153358_add_title_to_settings_table', 26);

-- --------------------------------------------------------

--
-- بنية الجدول `opinions`
--

CREATE TABLE `opinions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `opinions`
--

INSERT INTO `opinions` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'op.png', '2023-01-28 18:03:55', '2023-01-28 18:03:55'),
(2, 'op.png', '2023-01-28 18:03:55', '2023-01-28 18:03:55'),
(3, 'op.png', '2023-01-28 18:04:53', '2023-01-28 18:04:53'),
(4, 'op.png', '2023-01-28 18:04:53', '2023-01-28 18:04:53'),
(5, 'QsVUeclipgj4kDL70568781675326662_1315823.png', '2023-01-28 20:59:26', '2023-02-02 06:31:02'),
(6, 'VsJVhtZYRBIpFPY77446461675326592_8963021.png', '2023-01-28 21:00:30', '2023-02-02 06:29:53'),
(7, 'RTIKfISCtiUWaqi22756671674947669_2378467.png', '2023-01-28 21:08:58', '2023-01-28 21:14:29'),
(8, 'TV96GZlm3MeCvT463682641675376194_6422845.png', '2023-02-02 20:16:01', '2023-02-02 20:16:34'),
(9, 'Zfd1EN9vb9ay2nR61262891675713540_1677885.png', '2023-02-06 17:58:21', '2023-02-06 17:59:01');

-- --------------------------------------------------------

--
-- بنية الجدول `opinion_translations`
--

CREATE TABLE `opinion_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opinion_id` int(11) NOT NULL,
  `name_author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `opinion_translations`
--

INSERT INTO `opinion_translations` (`id`, `opinion_id`, `name_author`, `title`, `detail`, `created_at`, `updated_at`, `locale`) VALUES
(1, 1, 'mahmoud', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal', '2023-01-28 21:01:43', '2023-01-28 23:08:06', 'en'),
(2, 1, 'محمود', 'حذّرت شركة الأدوية الأمريكية...', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', '2023-01-28 21:01:43', '2023-01-28 23:08:10', 'ar'),
(3, 2, 'mahmoud', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaal', '2023-01-28 21:01:43', '2023-01-28 23:08:16', 'en'),
(4, 2, 'محمود', 'حذّرت شركة الأدوية الأمريكية...', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', '2023-01-28 21:01:43', '2023-01-28 23:08:20', 'ar'),
(5, 3, 'ahmed', 'ronaldoooooooooo goaaaaaaaaaaal ', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaal', '2023-01-28 21:03:54', '2023-01-28 23:08:23', 'en'),
(6, 3, 'أحمد', 'حذّرت شركة الأدوية الأمريكية....', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', '2023-01-28 21:03:54', '2023-01-28 23:08:30', 'ar'),
(7, 4, 'ahmed', 'ronaldoooooooooo goaaaaaaaaaaal ', 'ronaldoooooooooo goaaaaaaaaaaal ronaldoooooooooo goaaaaaaaaaaalronaldoooooooooo goaaaaaaaaaaal', '2023-01-28 21:03:54', '2023-01-28 23:08:33', 'en'),
(8, 4, 'أحمد', 'حذّرت شركة الأدوية الأمريكية....', 'حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية حذّرت شركة الأدوية الأمريكية', '2023-01-28 21:03:54', '2023-01-28 23:08:37', 'ar'),
(9, 7, 'aiham', 'fffffffffffffff', 'ccccccccccccccccccccccccccccccccc', '2023-01-28 21:08:58', '2023-01-28 21:08:58', 'en'),
(10, 7, 'أيهم', 'المنتخب السعودي يصدم التانجو الأرجنتيني', 'لللللللللللللللللللللللللللللللللللللللللللللللللللللللللللللل', '2023-01-28 21:08:58', '2023-01-28 21:08:58', 'ar'),
(11, 6, 'aiham', 'mmmmmmmmmmmm', 'xxxxxxxxxxxxxxxxxxxxxx', '2023-02-02 06:29:53', '2023-02-02 06:29:53', 'en'),
(12, 6, 'أيهم', 'هذه المقالة', 'وووووووووووووووووووووو', '2023-02-02 06:29:53', '2023-02-02 06:29:53', 'ar'),
(13, 5, 'mohammad', 'ffffdddd', 'xxxxxxxxxxxxxxxxxxxxxx', '2023-02-02 06:31:02', '2023-02-02 06:31:02', 'en'),
(14, 5, 'محمد', 'هذه المقالة', 'وووووووووووووووووووووو', '2023-02-02 06:31:02', '2023-02-02 06:31:02', 'ar'),
(15, 8, 'عبود', 'هذه الفئة', '<p>سسسسسسسسسسسسسسس</p>', '2023-02-02 20:16:01', '2023-02-06 18:58:25', 'ar'),
(16, 9, 'مؤمن', 'المنتخب السعودي يصدم التانجو الأرجنتيني', '<p>لا لا لا لا لا</p>', '2023-02-06 17:58:21', '2023-02-06 19:06:52', 'ar');

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
(4, 'image.png', 1, 'contact', 'active', '2023-01-20 22:21:25', '2023-02-04 20:12:29', NULL);

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
(7, 4, 'en', 'contact', 'description', NULL, NULL, NULL),
(8, 4, 'ar', 'التواصل', '<p>هذذذذذذذذذذذ</p>', NULL, '2023-02-04 18:02:57', NULL);

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
  `tiktok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `play` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_maintenance_mode` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `is_allow_register` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `is_allow_login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0->off 1->on',
  `urls` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `paginateTotal`, `login_image`, `google_play_url`, `app_store_url`, `app_logo`, `info_email`, `mobile`, `facebook`, `twitter`, `instagram`, `tiktok`, `linked`, `youtube`, `play`, `paper`, `about`, `whatsapp`, `ad`, `banner_header`, `is_maintenance_mode`, `is_allow_register`, `is_allow_login`, `urls`, `created_at`, `updated_at`, `deleted_at`, `title`) VALUES
(1, 20, 'aVqXuNh4niPJKFg51512401675713114_2218541.png', 'wwwwwwwwwww', 'wwwwwwwwwwwww', 'logo.svg\r\n', 'hexa@gmail.com', '059413268', 'https://www.facebook.com/', 'https://twitter.com/Risslh', 'https://www.instagram.com/yousef__bakar/', 'https://www.tiktok.com/ar/', 'https://twitter.com/LinkedIn', 'https://youtu.be/T7Rj1ij8JhU', 'https://youtu.be/T7Rj1ij8JhU', 'https://games4esl.com/list-of-sports/', '<p>&nbsp;</p>\r\n<p>سرمد موقع متخصص في عرض الرياضات المختلفة والمبارات حول العالم</p>', 'https://www.whatsapp.com/download?lang=ar', 'ad.png', 'banner-header.png', '0', '0', '0', '', '2023-02-05 11:07:55', '2023-02-08 17:16:44', NULL, 'سرمد');

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
-- بنية الجدول `sports`
--

CREATE TABLE `sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sports`
--

INSERT INTO `sports` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2023-01-28 14:34:20', '2023-01-28 14:34:20', NULL),
(2, '2023-01-28 14:34:20', '2023-01-28 14:34:20', NULL),
(3, '2023-01-28 14:34:53', '2023-01-28 14:34:53', NULL),
(4, '2023-01-28 14:35:11', '2023-01-28 14:44:19', NULL),
(5, '2023-01-28 14:44:44', '2023-01-28 14:44:44', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `sport_translations`
--

CREATE TABLE `sport_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sport_translations`
--

INSERT INTO `sport_translations` (`id`, `sport_id`, `sport_name`, `created_at`, `updated_at`, `deleted_at`, `locale`) VALUES
(1, 1, 'basketball', '2023-01-28 14:37:19', '2023-01-31 07:49:33', NULL, 'en'),
(2, 1, 'كرة سلة', '2023-01-28 14:37:19', '2023-01-31 07:49:37', NULL, 'ar'),
(3, 2, 'volleyball', '2023-01-28 14:38:52', '2023-01-31 07:49:41', NULL, 'en'),
(4, 2, 'كرة طائرة', '2023-01-28 14:39:31', '2023-01-31 07:49:45', NULL, 'ar'),
(5, 3, 'handball', '2023-01-28 14:40:19', '2023-01-31 07:50:16', NULL, 'en'),
(6, 3, 'كرة يد', '2023-01-28 14:41:37', '2023-01-31 07:50:20', NULL, 'ar'),
(7, 4, 'tennis', '2023-01-28 14:42:12', '2023-01-31 07:50:23', NULL, 'en'),
(8, 4, 'تنس', '2023-01-28 14:43:14', '2023-01-31 07:50:26', NULL, 'ar'),
(9, 5, 'others', '2023-01-28 14:45:02', '2023-01-31 07:50:30', NULL, 'en'),
(10, 5, 'ألعاب قوى', '2023-01-28 14:45:02', '2023-01-31 07:50:33', NULL, 'ar');

-- --------------------------------------------------------

--
-- بنية الجدول `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `term_translations`
--

CREATE TABLE `term_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `videos`
--

INSERT INTO `videos` (`id`, `created_at`, `updated_at`, `image`) VALUES
(1, '2023-01-20 22:32:54', '2023-01-29 09:30:48', '2H2xAM3VzAYgucV28281061674991847_2669579.png'),
(2, '2023-01-23 15:25:34', '2023-01-28 18:21:19', 'v2.png'),
(3, '2023-01-23 15:26:59', '2023-01-28 18:21:27', 'v2.png'),
(4, '2023-01-23 15:30:33', '2023-01-28 18:21:34', 'v2.png'),
(5, '2023-01-23 19:12:08', '2023-01-29 07:56:15', 'NeE8ZkjIwLGyvNo18170201674986175_7483095.png'),
(6, '2023-01-23 19:19:45', '2023-01-28 18:21:49', 'v2.png'),
(7, '2023-01-23 19:20:27', '2023-01-29 07:47:54', 'QCn29a1lvLFcJbx96583511674985673_7461420.png'),
(8, '2023-01-29 07:52:03', '2023-01-29 07:52:03', 'DBLJSZDBJ7MBacw34687441674985922_1825821.png');

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
(1, 1, 'ronaldo goals', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'en', '2023-01-23 19:10:37', '2023-01-29 09:30:48'),
(2, 1, 'أهداف رونالدو', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'ar', '2023-01-23 19:10:37', '2023-01-28 19:09:35'),
(3, 2, 'matches ', 'https://www.youtube.com/watch?v=CNv9JbQR6tI\r\n\r\n', 'en', '2023-01-23 19:12:55', '2023-01-28 19:09:48'),
(4, 2, 'مباريات', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'ar', '2023-01-23 19:12:55', '2023-01-28 19:10:00'),
(5, 3, 'goals', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'en', '2023-01-23 19:14:44', '2023-01-28 19:07:59'),
(6, 3, 'اهداف الدون', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'ar', '2023-01-23 19:15:27', '2023-01-28 19:08:12'),
(7, 6, 'vvvvv', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'en', '2023-01-23 19:19:45', '2023-01-28 19:08:31'),
(8, 6, 'أهداف', 'https://www.youtube.com/watch?v=CNv9JbQR6tI\r\n', 'ar', '2023-01-23 19:19:45', '2023-01-28 19:08:48'),
(9, 7, 'vvvvv', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'en', '2023-01-23 19:20:27', '2023-01-28 19:09:00'),
(10, 7, 'هدف', 'https://www.youtube.com/watch?v=CNv9JbQR6tI', 'ar', '2023-01-23 19:20:27', '2023-01-28 19:09:12'),
(11, 8, 'vvvvv', 'https://www.youtube.com/watch?v=CNv9JbQR6tl', 'en', '2023-01-29 07:52:03', '2023-01-29 07:52:03'),
(12, 8, 'هدف', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-29 07:52:03', '2023-01-29 07:52:03'),
(13, 5, 'goals', 'https://youtu.be/KKZN2vaxxxE', 'en', '2023-01-29 07:56:15', '2023-01-29 07:56:15'),
(14, 5, 'هدف', 'https://youtu.be/KKZN2vaxxxE', 'ar', '2023-01-29 07:56:15', '2023-01-29 07:56:15');

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
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_images_object_type_object_id_index` (`object_type`,`object_id`);

--
-- Indexes for table `article_translations`
--
ALTER TABLE `article_translations`
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
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinion_translations`
--
ALTER TABLE `opinion_translations`
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
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_translations`
--
ALTER TABLE `sport_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_translations`
--
ALTER TABLE `term_translations`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `article_translations`
--
ALTER TABLE `article_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `opinion_translations`
--
ALTER TABLE `opinion_translations`
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
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sport_translations`
--
ALTER TABLE `sport_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term_translations`
--
ALTER TABLE `term_translations`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video_translations`
--
ALTER TABLE `video_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
