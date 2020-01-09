-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 01:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doofazit_website`
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

--
-- Dumping data for table `aboutourtraining`
--

INSERT INTO `aboutourtraining` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Doofazit Tringin', 'DOOFAZIT WORKING TWO TYPES ACTIVITY (1) IT TRAINING INSTITUTE (2) WORLD CLASS SOFTWARE SOLUTIONS. OUR TRAINING AND SOFTWARE DEPARTMENT MANAGING QUALITY & EXPERIENCE IT SKILL PERSON THERE HAVE WORLD CLASS IT SOLUTIONS CAPACITY', '8f4990ead45abb0f0200d8287fe711ff.png', '2017-12-01 10:35:27', '2017-12-01 10:35:27');

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
(1, 'Our Training System Capable to Build Your Professional career', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you.Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you.', '144b9ef051aa74114ca8edb32e57afb1.jpg', '2017-12-01 03:05:02', '2017-12-01 03:05:02'),
(2, 'Our Training System Capable to Build', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for youMaintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real', '849292092dd4ce1ac738882a62eb8657.jpg', '2017-12-01 03:05:41', '2017-12-01 03:08:42');

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

--
-- Dumping data for table `certificationprogram`
--

INSERT INTO `certificationprogram` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Doofazit Tringin', '9e6698c73078618f806719ccd5798257.jpg', '2017-12-01 08:51:56', '2017-12-01 08:51:56'),
(2, 'Doofazit Tringin', '4197b728791d31c2e2b3e4313f2567e1.jpg', '2017-12-01 08:52:17', '2017-12-01 08:52:17'),
(3, 'Database Architecture Design', 'c5aca2f6b8e4fbcb6b918480a6c0dcaa.jpg', '2017-12-01 08:52:30', '2017-12-01 08:52:30');

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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_title`, `course_fee`, `total_class`, `class_duration`, `course_description`, `career_suport`, `course_module`, `software_module`, `course_banner`, `course_image`, `course_icon`, `created_at`, `updated_at`) VALUES
(1, 'Web desgin', 'Project Based Web Design course', 8500, '25', '2', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new caree\r\nTreehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new caree', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new caree', '1,', '1,2,', '33f73a61abfd40111c517a37d084425a.jpg', 'c4f3a131e3c799c7196918f4b0c568ad.jpg', '546c536385d4bf142b1b49c951ae289d.png', '2017-12-01 04:09:28', '2017-12-01 04:09:28'),
(2, 'Web development', 'Project Based Web Development Course', 15000, '35', '2', 'DOOFAZIT WORKING TWO TYPES ACTIVITY (1) IT TRAINING INSTITUTE (2) WORLD CLASS SOFTWARE SOLUTIONS. OUR TRAINING AND SOFTWARE DEPARTMENT MANAGING QUALITY & EXPERIENCE IT SKILL PERSON THERE HAVE WORLD CLASS IT SOLUTIONS CAPACITY. IN A SOFTWARE DEPARTMENT CURRENTLY WE ARE WORKING SOFTWARE SOLUTIONS BUILDING YOUR REQUIREMENT. WE FILL PROUD FOR OUR VALUABLE CLIENT THAT OUR BUSINESS MAIN PART.', 'DOOFAZIT WORKING TWO TYPES ACTIVITY (1) IT TRAINING INSTITUTE (2) WORLD CLASS SOFTWARE SOLUTIONS. OUR TRAINING AND SOFTWARE DEPARTMENT MANAGING QUALITY & EXPERIENCE IT SKILL PERSON THERE HAVE WORLD CLASS IT SOLUTIONS CAPACITY. IN A SOFTWARE DEPARTMENT CURRENTLY WE ARE WORKING SOFTWARE SOLUTIONS BUILDING YOUR REQUIREMENT. WE FILL PROUD FOR OUR VALUABLE CLIENT THAT OUR BUSINESS MAIN PART.', '3,4,5,', '1,2,', '69de6bf460e2ac027eebde8c97060ea5.jpg', 'ffa1831365507d06aea0c0c0ed7201ec.jpg', '15a42a5cf1c4d6e1333bab0e62e0c40a.png', '2017-12-01 10:20:18', '2017-12-01 10:20:18');

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

--
-- Dumping data for table `course_module`
--

INSERT INTO `course_module` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'HTML', '2017-12-01 04:08:11', '2017-12-01 04:08:11'),
(2, 'CSS', '2017-12-01 04:08:15', '2017-12-01 04:08:15'),
(3, 'Programming C', '2017-12-01 10:17:37', '2017-12-01 10:17:37'),
(4, 'C++', '2017-12-01 10:17:42', '2017-12-01 10:17:42'),
(5, 'PHP', '2017-12-01 10:17:48', '2017-12-01 10:17:48');

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

--
-- Dumping data for table `feedbackstudent`
--

INSERT INTO `feedbackstudent` (`id`, `name`, `designation`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Imtiaz Ahmed rohan', 'Web designer', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new career', 'd19f6b9ed23e90d34a63b40ff4767242.jpg', '2017-12-01 08:00:16', '2017-12-01 08:00:16'),
(2, 'Nadim Ahmed rohan', 'Graphics desginer', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new career', 'b206bced2ce266c726add6b12f4376b9.jpg', '2017-12-01 08:01:02', '2017-12-01 08:01:02'),
(3, 'Sumi Islam', 'Graphices', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new career', '1c2d1943abf6f1e0cee2a6d81f56473c.jpg', '2017-12-01 08:02:04', '2017-12-01 08:02:04'),
(4, 'Arif hasan', 'EW post', 'Treehouse offers a full-access free trial to our course library! Choose from 1,000s of hours of content, from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new career', '0f3862d09f25d703ddb696f67f80c972.png', '2017-12-01 08:02:38', '2017-12-01 08:02:38');

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
(1, '2017_11_16_090813_create_slider_table', 1),
(2, '2017_11_16_090935_create_course_table', 1),
(3, '2017_11_16_161936_create_specialvideo_table', 1),
(4, '2017_11_22_104422_create_feedbackstudent_table', 1),
(5, '2017_11_22_133622_create_Upcomingseminar_table', 1),
(6, '2017_11_23_045119_create_certificationProgram_table', 1),
(7, '2017_11_23_053129_create_ourProgram_table', 1),
(8, '2017_11_23_060746_create_aboutOurTraining_table', 1),
(9, '2017_11_30_123918_create_adminCoursemodule_table', 1),
(10, '2017_11_30_123959_create_adminSoftwaremodule_table', 1),
(11, '2017_11_30_194051_create_multigallery_table', 1),
(12, '2017_12_01_085404_create_doofazitBlog_table', 2),
(13, '2017_12_01_094406_create_tutorialVideo_table', 3),
(14, '2017_12_01_114322_create_Noticeinfo_table', 4);

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
(1, 1, 'Doofazit Tringin', '715bdae23e741f1b179cbf870f3fc04d.jpg', '2017-12-01 02:50:06', '2017-12-01 02:50:06'),
(2, 2, 'Doofazit Tringin', 'd276e8731203e9fb6f0d75d7896c4fa3.jpg', '2017-12-01 02:50:18', '2017-12-01 02:50:18'),
(3, 3, 'Database Architecture Design', '6d16b24efa3e474c399c7ea05716240d.jpg', '2017-12-01 02:50:28', '2017-12-01 02:50:28'),
(4, 4, 'Database Architecture Design', '22d688246a64cf25b2fc37323ae9c336.jpg', '2017-12-01 02:50:39', '2017-12-01 02:50:39'),
(5, 3, 'Doofazit Tringin', '8bc6ed92af0c89444da702f04e1c3f4e.jpg', '2017-12-01 02:51:25', '2017-12-01 02:51:25');

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

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(4, 'Graphic course outlines', 'An accident, also known as an unintentional injury, is an undesirable, incidental, and unplanned event that could have been prevented had circumstances leading up to the accident been recognized, and acted upon, prior to its occurrence', '47daa5ce352a159473312f5d2281799b.png', '2017-12-01 06:26:45', '2017-12-01 06:47:49'),
(5, 'In Our Training Extra Ordinary Each and every class live Project Base.', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you', 'b119dc7c867d27784f5cdee77bb27e38.png', '2017-12-01 07:03:15', '2017-12-01 07:03:15');

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

--
-- Dumping data for table `ourprogram`
--

INSERT INTO `ourprogram` (`id`, `title`, `url_link`, `created_at`, `updated_at`) VALUES
(1, 'Database Architecture Design', 'https://www.youtube.com/embed/zWBItDBRibU', '2017-12-01 09:34:36', '2017-12-01 09:34:36'),
(2, 'Doofazit Tringin', 'https://www.youtube.com/embed/_Nua3Cjdik0', '2017-12-01 09:34:50', '2017-12-01 09:34:50'),
(3, 'Our Program', 'https://www.youtube.com/embed/YeC8wT3kpm0', '2017-12-01 09:36:28', '2017-12-01 09:42:19');

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

--
-- Dumping data for table `software_module`
--

INSERT INTO `software_module` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Notpate ++', '2017-12-01 04:08:25', '2017-12-01 04:08:25'),
(2, 'subline text 3', '2017-12-01 04:08:28', '2017-12-01 04:08:28');

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

--
-- Dumping data for table `specialvideo`
--

INSERT INTO `specialvideo` (`id`, `title`, `url_link`, `created_at`, `updated_at`) VALUES
(1, 'Doofazit Tringin', 'https://www.youtube.com/embed/h5_Q7dbaJDE', '2017-12-01 07:47:12', '2017-12-01 07:47:12'),
(2, 'Database Architecture Design', 'https://www.youtube.com/embed/MKP6p7nXTVc', '2017-12-01 07:47:50', '2017-12-01 07:47:50');

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

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `title`, `course_id`, `url_link`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Database Architecture Design', 1, 'https://www.youtube.com/embed/h5_Q7dbaJDE', 'ffcb8615a7574acda6b3e7017f56fa9d.jpg', '2017-12-01 04:16:39', '2017-12-01 05:16:42'),
(3, 'Doofazit Tringin', 1, 'https://www.youtube.com/embed/MKP6p7nXTVc', 'f6e167310a572efed70b110740a67b8d.jpg', '2017-12-01 05:12:08', '2017-12-01 05:12:08');

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

--
-- Dumping data for table `upcomingseminar`
--

INSERT INTO `upcomingseminar` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '30-11-17 Devlopment Seminar 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.', '2bf44142aea93de15b2afab3854ad806.jpg', '2017-12-01 08:20:34', '2017-12-01 08:20:34'),
(2, '31-11-17 Devlopment Seminar 5', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you', '51ef27fc17aa559e19701f6c0fd71957.jpg', '2017-12-01 08:21:18', '2017-12-01 08:21:18'),
(3, '10-12-17 Development', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you', '7b93bc3c825f6a2973e00159f5513151.jpg', '2017-12-01 08:22:00', '2017-12-01 08:22:00'),
(4, '20-12-2017 Architecture Design', 'In Our Training Extra Ordinary Each and every class live Project Base. We Maintain Our Training Running Professional High Skill Programmer That Teacher can know your Need. Project System Class within short time make your Real Life Expert & Experience, is good Luck for you', 'f0fb9126e75da3bbb9d4dba783ac5a10.jpg', '2017-12-01 08:22:28', '2017-12-01 08:22:28');

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
-- Indexes for table `feedbackstudent`
--
ALTER TABLE `feedbackstudent`
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
-- Indexes for table `ourprogram`
--
ALTER TABLE `ourprogram`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutourtraining`
--
ALTER TABLE `aboutourtraining`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `certificationprogram`
--
ALTER TABLE `certificationprogram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_module`
--
ALTER TABLE `course_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedbackstudent`
--
ALTER TABLE `feedbackstudent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `multi_gallery`
--
ALTER TABLE `multi_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ourprogram`
--
ALTER TABLE `ourprogram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `software_module`
--
ALTER TABLE `software_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `specialvideo`
--
ALTER TABLE `specialvideo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upcomingseminar`
--
ALTER TABLE `upcomingseminar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
