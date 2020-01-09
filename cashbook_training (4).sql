-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 11:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashbook_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutourtraining`
--

CREATE TABLE `aboutourtraining` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Training', '<h1><strong>Traihasdahskjdfhasdfjh</strong></h1>', 'ec7707e940c991a39da6867d3a207ae6.jpg', '2020-01-07 02:19:43', '2020-01-07 02:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sub_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `url`, `position`, `status`, `sub_status`, `created_at`, `updated_at`) VALUES
(4, 'Home', 'Homepage', 1, 0, 0, '2020-01-07 23:24:46', '2020-01-08 04:11:11'),
(5, 'Training', 'TrainingHome', 3, 1, 1, '2020-01-07 23:25:08', '2020-01-07 23:25:08'),
(7, 'Blog', 'Blog', 5, 0, 0, '2020-01-07 23:25:47', '2020-01-08 04:11:24'),
(8, 'Tutorial Video', 'Tutorial', 7, 1, 1, '2020-01-07 23:26:12', '2020-01-07 23:26:12'),
(9, 'Upcoming Batch', 'UpdateBatch', 8, 1, 1, '2020-01-07 23:27:23', '2020-01-07 23:27:23'),
(10, 'Notice', 'NoticeHome', 9, 1, 1, '2020-01-07 23:28:01', '2020-01-07 23:28:01'),
(11, 'Contact', 'ContactHome', 10, 1, 1, '2020-01-07 23:28:47', '2020-01-07 23:28:47'),
(12, 'About', '#', 2, 1, 1, '2020-01-08 04:11:53', '2020-01-08 04:11:53'),
(13, 'Gallery', '#', 4, 1, 1, '2020-01-08 04:12:32', '2020-01-08 04:12:32'),
(14, 'Student', '#', 6, 1, 1, '2020-01-08 04:13:00', '2020-01-08 04:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `certificationprogram`
--

CREATE TABLE `certificationprogram` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` double NOT NULL,
  `total_class` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_duration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_suport` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_module` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_module` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_banner` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_icon` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_module`
--

CREATE TABLE `course_module` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diploam_student`
--

CREATE TABLE `diploam_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pramanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_time` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_days` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_time` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `know_us` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialize_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackstudent`
--

CREATE TABLE `feedbackstudent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_student`
--

CREATE TABLE `feedback_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userInterested` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_student`
--

INSERT INTO `feedback_student` (`id`, `name`, `email`, `userInterested`, `question`, `created_at`, `updated_at`) VALUES
(4, 'siddiquwe', 'siddique528142@gmail.com', 'Web developer', 'what is your', '2020-01-06 02:41:55', '2020-01-06 02:41:55'),
(6, 'sdafdfasdf', 'as@gmail.com', 'sakjdflkajsdflkajsldkgfalksd', 'akgjalksjlkasdglkag', '2020-01-06 14:26:36', '2020-01-06 14:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `free_course_student`
--

CREATE TABLE `free_course_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pramanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `know_us` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialize_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galary_option`
--

CREATE TABLE `galary_option` (
  `id` int(10) UNSIGNED NOT NULL,
  `option` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary_option`
--

INSERT INTO `galary_option` (`id`, `option`) VALUES
(0, 'Teacher'),
(2, 'saaks');

-- --------------------------------------------------------

--
-- Table structure for table `header_news`
--

CREATE TABLE `header_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `News` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_news`
--

INSERT INTO `header_news` (`id`, `News`, `icon`, `created_at`, `updated_at`) VALUES
(18, 'হোয়াইট হাউজ থেকে দেয়া টেলিভিশন বক্তৃতায় মি. ট্রাম্প বলেন, বুধবার ভোররাতের হামলায় কোনো কোন আমেরিকান বা ইরাকীর প্রানহানী হয়নি', 'fa-twitter', '2020-01-09 03:14:25', '2020-01-09 03:14:25'),
(19, 'ঢাকা বিশ্ববিদ্যালয়ের প্রথম ছাত্রী ছিলেন বিপ্লবী লীলা নাগ, যিনি ১৯২৩ সালে ঢাকা বিশ্ববিদ্যালয় থেকে ইংরেজী বিষয়ে এমএ পাশ করেন?', 'fa-facebook', '2020-01-09 03:15:14', '2020-01-09 03:15:14'),
(20, 'ঢাকা বিশ্ববিদ্যালয়ের প্রথম ছাত্রী ছিলেন বিপ্লবী লীলা নাগ, যিনি ১৯২৩ সালে ঢাকা বিশ্ববিদ্যালয় থেকে ইংরেজী বিষয়ে এমএ পাশ করেন?', 'fa-book', '2020-01-09 03:15:48', '2020-01-09 03:15:48'),
(23, 'ঢাকা বিশ্ববিদ্যালয়ের প্রথম ছাত্রী ছিলেন বিপ্লবী লীলা নাগ, যিনি ১৯২৩ সালে ঢাকা বিশ্ববিদ্যালয় থেকে ইংরেজী বিষয়ে এমএ পাশ করেন?', 'fa-linkedin', '2020-01-09 03:18:27', '2020-01-09 03:18:27'),
(24, 'atik and siddique are pagla for megla', NULL, '2020-01-09 03:48:45', '2020-01-09 03:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `itsecurity_course`
--

CREATE TABLE `itsecurity_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pramanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialize_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(19, '2018_01_07_194436_create_StudentProject_table', 9),
(24, '2017_11_16_090813_create_slider_table', 10),
(25, '2017_11_16_090935_create_course_table', 10),
(26, '2017_11_16_161936_create_specialvideo_table', 10),
(27, '2017_11_22_104422_create_feedbackstudent_table', 10),
(28, '2017_11_22_133622_create_Upcomingseminar_table', 10),
(29, '2017_11_23_045119_create_certificationProgram_table', 10),
(30, '2017_11_23_053129_create_ourProgram_table', 10),
(31, '2017_11_23_060746_create_aboutOurTraining_table', 10),
(32, '2017_11_30_123918_create_adminCoursemodule_table', 10),
(33, '2017_11_30_123959_create_adminSoftwaremodule_table', 10),
(34, '2017_11_30_194051_create_multigallery_table', 10),
(35, '2017_12_01_085404_create_doofazitBlog_table', 10),
(36, '2017_12_01_094406_create_tutorialVideo_table', 10),
(37, '2017_12_01_114322_create_Noticeinfo_table', 10),
(38, '2017_12_15_125439_create_professionalCourse_table', 10),
(39, '2017_12_15_150443_create_DiplomaCourse_table', 10),
(40, '2017_12_15_153554_create_FreeCourseStudent_table', 10),
(41, '2017_12_15_155428_create_ITsecurityCourseStudent_table', 10),
(42, '2018_01_07_203342_create_StudentWork_table', 10),
(46, '2020_01_06_202312_create_studentfeedbacks_table', 12),
(50, '2020_01_04_090536_create_categories_table', 13),
(52, '2020_01_06_193133_create_subcategories_table', 14),
(53, '2020_01_09_044413_create_header_news_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `multi_gallery`
--

CREATE TABLE `multi_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_gallery`
--

INSERT INTO `multi_gallery` (`id`, `option_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'homw', 'b92b08521de049c0d492373e1e18ed73.jpg', '2020-01-06 23:47:15', '2020-01-06 23:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ourprogram`
--

CREATE TABLE `ourprogram` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_student`
--

CREATE TABLE `professional_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pramanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_days` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_time` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `know_us` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialize_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asdfasdf', 'b0acd8a4b2ffd0043cd1d22f964d2b68.jpg', '2020-01-06 14:15:19', '2020-01-06 14:15:19'),
(2, 'asdfa', '64413eae9f1f7e8e6871d1ebc11860bf.jpeg', '2020-01-06 14:25:20', '2020-01-06 14:25:20'),
(3, 'asdfasdfasfasdf', '0f70c336c4db465648503514c6db6579.jpg', '2020-01-06 14:25:28', '2020-01-06 14:25:28'),
(4, 'slide', '2b56a467bef09ea458b6aa552b826f50.jpg', '2020-01-08 23:06:48', '2020-01-08 23:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `software_module`
--

CREATE TABLE `software_module` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialvideo`
--

CREATE TABLE `specialvideo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedbacks`
--

CREATE TABLE `studentfeedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userInterested` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_project`
--

CREATE TABLE `student_project` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `sub_title`, `sub_link`, `position`, `publish`, `status`, `created_at`, `updated_at`) VALUES
(3, 12, 'About Doofazit', 'HomeAbout', 1, 1, 1, '2020-01-08 04:15:07', '2020-01-08 05:17:45'),
(4, 12, 'Our Training', 'HomeAbout/create', 2, 1, 1, '2020-01-08 04:16:46', '2020-01-08 04:16:46'),
(5, 12, 'The Training Center', 'HomeAbout/create', 3, 1, 1, '2020-01-08 04:20:13', '2020-01-08 04:20:13'),
(6, 12, 'Founder Of Doofazit', 'HomeFounderCompany.aboutCompanyFounder', 4, 1, 1, '2020-01-08 04:21:33', '2020-01-08 04:21:33'),
(7, 13, 'Student Gallery', 'StudentGallery', 1, 1, 1, '2020-01-08 04:28:03', '2020-01-08 04:28:03'),
(8, 13, 'Teacher Gallery', 'TeacherGallery', 2, 1, 1, '2020-01-08 04:47:55', '2020-01-08 04:47:55'),
(9, 13, 'Office Gallery', 'OfficeGallery', 3, 1, 1, '2020-01-08 22:19:43', '2020-01-08 22:19:43'),
(10, 13, 'DoofazIT Events', 'DoofazitEvent', 4, 1, 1, '2020-01-08 22:21:32', '2020-01-08 22:21:32'),
(11, 13, 'Lab & Program', 'LabProgram', 5, 1, 1, '2020-01-08 22:22:45', '2020-01-08 22:22:45'),
(12, 14, 'Student Project', 'StudentProject', 1, 1, 1, '2020-01-08 22:24:07', '2020-01-08 22:24:07'),
(13, 14, 'Student Feedback', 'FeedbackStudent', 2, 1, 1, '2020-01-08 22:25:06', '2020-01-08 22:25:06'),
(14, 14, 'Achievement & Awards', '#', 3, 1, 1, '2020-01-08 22:26:32', '2020-01-08 22:26:32'),
(15, 14, 'Student Community', '#', 3, 1, 1, '2020-01-08 22:27:12', '2020-01-08 22:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `url_link` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcomingseminar`
--

CREATE TABLE `upcomingseminar` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DoofazIT', 'info@doofazit.com', '$2y$10$w.LTc9I/4yBFIlZgPMglLOF8hNSKmN/MZn4tSdUWR49TAa4PooN7i', 'JWJ2SboKMoHAYqcaahJBrMAsfEUir5hxpbvoXdS6ZazPBCX6VklTb7wiHAwW', '2018-01-30 05:09:53', '2018-01-30 05:09:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutourtraining`
--
ALTER TABLE `aboutourtraining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificationprogram`
--
ALTER TABLE `certificationprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_module`
--
ALTER TABLE `course_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diploam_student`
--
ALTER TABLE `diploam_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackstudent`
--
ALTER TABLE `feedbackstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_student`
--
ALTER TABLE `feedback_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_course_student`
--
ALTER TABLE `free_course_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galary_option`
--
ALTER TABLE `galary_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_news`
--
ALTER TABLE `header_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itsecurity_course`
--
ALTER TABLE `itsecurity_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_gallery`
--
ALTER TABLE `multi_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourprogram`
--
ALTER TABLE `ourprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_student`
--
ALTER TABLE `professional_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_module`
--
ALTER TABLE `software_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialvideo`
--
ALTER TABLE `specialvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfeedbacks`
--
ALTER TABLE `studentfeedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_project`
--
ALTER TABLE `student_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomingseminar`
--
ALTER TABLE `upcomingseminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutourtraining`
--
ALTER TABLE `aboutourtraining`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `certificationprogram`
--
ALTER TABLE `certificationprogram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_module`
--
ALTER TABLE `course_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diploam_student`
--
ALTER TABLE `diploam_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbackstudent`
--
ALTER TABLE `feedbackstudent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_student`
--
ALTER TABLE `feedback_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `free_course_student`
--
ALTER TABLE `free_course_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_news`
--
ALTER TABLE `header_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `itsecurity_course`
--
ALTER TABLE `itsecurity_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `multi_gallery`
--
ALTER TABLE `multi_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourprogram`
--
ALTER TABLE `ourprogram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_student`
--
ALTER TABLE `professional_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `software_module`
--
ALTER TABLE `software_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialvideo`
--
ALTER TABLE `specialvideo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentfeedbacks`
--
ALTER TABLE `studentfeedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_project`
--
ALTER TABLE `student_project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcomingseminar`
--
ALTER TABLE `upcomingseminar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
