-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 08:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guphs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `about_us`:
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_forms`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `admission_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afu_symbol_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afu_entrance_score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merit_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_seeking_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_details_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passed_year_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_grade_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_details_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passed_year_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_grade_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_details_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passed_year_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_grade_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `admission_forms`:
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_admissions`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `apply_for_admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `apply_for_admissions`:
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `courses`:
--

-- --------------------------------------------------------

--
-- Table structure for table `course_descriptions`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `course_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `course_descriptions`:
--   `course_id`
--       `courses` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `enquiries`:
--

-- --------------------------------------------------------

--
-- Table structure for table `four_blocks`
--
-- Creation: Mar 22, 2020 at 05:00 AM
-- Last update: Mar 22, 2020 at 06:49 AM
--

CREATE TABLE `four_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `four_blocks`:
--

--
-- Dumping data for table `four_blocks`
--

INSERT INTO `four_blocks` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Download', 'Download The Brochure', 'public/images/C9bdCHyDWErTkLg5QlsBFisuUAJFLvLvzxBBp2RA.png', '2020-03-22 00:54:11', '2020-03-22 00:54:11'),
(2, 'Download', 'Admission Form', 'public/images/KMZZFfIt1vjECypSrBsdqQOaTWElrKlcJqNecbO3.png', '2020-03-22 01:02:41', '2020-03-22 01:02:41'),
(3, 'Contact', '01-66587333', 'public/images/aOnEVdXQkt3zS1Bbjczbs097A0KmfWxmbNNB84Xh.png', '2020-03-22 01:04:02', '2020-03-22 01:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `galleries`:
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `gallery_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `gallery_images`:
--   `gallery_id`
--       `galleries` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `information`:
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `migrations`:
--

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_28_053258_create_galleries_table', 1),
(4, '2019_03_02_113000_create_gallery_images_table', 1),
(5, '2019_11_11_060021_create_about_us_table', 1),
(6, '2019_11_11_070232_create_courses_table', 1),
(7, '2019_11_11_073742_create_course_descriptions_table', 1),
(8, '2019_11_11_115817_create_news_and_events_table', 1),
(9, '2019_11_12_045612_create_information_table', 1),
(10, '2019_11_12_073417_create_settings_table', 1),
(11, '2019_11_12_084611_create_notices_table', 1),
(12, '2019_11_13_063204_create_enquiries_table', 1),
(13, '2019_11_13_104930_create_four_blocks_table', 1),
(14, '2019_11_13_112822_create_apply_for_admissions_table', 1),
(15, '2019_11_14_044750_create_semesters_table', 1),
(16, '2019_11_14_064540_create_sliders_table', 1),
(17, '2019_11_21_085051_create_admission_forms_table', 1),
(18, '2019_12_04_100328_create_vacancies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_and_events`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `news_and_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` enum('holiday','activities','regular') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `news_and_events`:
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `notices`:
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `password_resets`:
--

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `semesters`:
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--
-- Creation: Mar 22, 2020 at 05:00 AM
-- Last update: Mar 22, 2020 at 06:58 AM
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `settings`:
--

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'public/images/6tGNPyX5qiRi3ahGbSbMJa3FuHZLdlAtUOEf9YTn.jpeg', '2020-03-21 23:24:09', '2020-03-21 23:24:59'),
(2, 'site_name', 'Gorkha Polytechnique School', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(3, 'short_name', 'Gorkha School', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(4, 'phone', '9843352492', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(5, 'mobile', '015129292', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(6, 'email', 'gorkha@gmail.com', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(7, 'address', 'Kohalpur', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(8, 'working_days', 'Sun to Fri', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(9, 'working_time', '10 am to 6 pm', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(10, 'admission_from', '03/01/2020', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(11, 'admission_to', '03/31/2020', '2020-03-21 23:24:09', '2020-03-22 01:13:08'),
(12, 'college_video_url', '', '2020-03-21 23:24:09', '2020-03-21 23:24:59'),
(13, 'footer_description', '', '2020-03-21 23:24:09', '2020-03-21 23:24:59'),
(14, 'facebook_link', '', '2020-03-21 23:24:09', '2020-03-21 23:24:59'),
(15, 'google_link', '', '2020-03-21 23:24:09', '2020-03-21 23:25:00'),
(16, 'instagram_link', '', '2020-03-21 23:24:09', '2020-03-21 23:25:00'),
(17, 'skype_link', '', '2020-03-21 23:24:09', '2020-03-21 23:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `sliders`:
--

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'first_slider_image', 'public/images/nmlOVl1jdGzLNAMcyu7SZBWnONKsA4yJDkFz4rbs.jpeg', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(2, 'second_slider_image', 'public/images/0fKKuUMfgIbyAX3D2PCmEHu9uEH6MyTEG4RRfEEd.jpeg', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(3, 'third_slider_image', 'public/images/3oGNxksr04BcFF1a7IeMx4QDJBuVa28gOLBi0SYI.jpeg', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(4, 'first_slider_subtitle', 'Education', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(5, 'first_slider_title', 'We Ensure Quality', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(6, 'second_slider_subtitle', 'Education', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(7, 'second_slider_title', 'We Ensure Quality', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(8, 'third_slider_subtitle', 'Education', '2020-03-21 23:29:14', '2020-03-21 23:29:14'),
(9, 'third_slider_title', 'We Ensure Quality', '2020-03-21 23:29:14', '2020-03-21 23:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Mar 22, 2020 at 05:00 AM
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
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admins@gmail.com', NULL, '$2y$10$rXxp6F27hxu79TIbl2lICecbWr/8GYwWFOWAcxREu0B9EBRScIKPK', NULL, '2020-03-21 23:22:15', '2020-03-21 23:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--
-- Creation: Mar 22, 2020 at 05:00 AM
--

CREATE TABLE `vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `vacancies`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_forms`
--
ALTER TABLE `admission_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_for_admissions`
--
ALTER TABLE `apply_for_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_descriptions`
--
ALTER TABLE `course_descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_descriptions_course_id_foreign` (`course_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `four_blocks`
--
ALTER TABLE `four_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_events`
--
ALTER TABLE `news_and_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_forms`
--
ALTER TABLE `admission_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apply_for_admissions`
--
ALTER TABLE `apply_for_admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_descriptions`
--
ALTER TABLE `course_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `four_blocks`
--
ALTER TABLE `four_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_and_events`
--
ALTER TABLE `news_and_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_descriptions`
--
ALTER TABLE `course_descriptions`
  ADD CONSTRAINT `course_descriptions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
