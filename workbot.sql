-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 01:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 1, '[]', '2022-07-30 00:33:48', '2022-07-30 00:33:48'),
(2, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 1, '[]', '2022-07-30 03:56:14', '2022-07-30 03:56:14'),
(3, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 04:57:53', '2022-07-30 04:57:53'),
(4, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 05:28:13', '2022-07-30 05:28:13'),
(5, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 05:29:17', '2022-07-30 05:29:17'),
(6, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 05:51:54', '2022-07-30 05:51:54'),
(7, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:31:35', '2022-07-30 06:31:35'),
(8, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:32:05', '2022-07-30 06:32:05'),
(9, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:32:29', '2022-07-30 06:32:29'),
(10, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:44:20', '2022-07-30 06:44:20'),
(11, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:45:05', '2022-07-30 06:45:05'),
(12, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:54:16', '2022-07-30 06:54:16'),
(13, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:54:24', '2022-07-30 06:54:24'),
(14, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:56:11', '2022-07-30 06:56:11'),
(15, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:56:22', '2022-07-30 06:56:22'),
(16, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 06:58:07', '2022-07-30 06:58:07'),
(17, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 07:01:56', '2022-07-30 07:01:56'),
(18, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 07:15:56', '2022-07-30 07:15:56'),
(19, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 23:33:44', '2022-07-30 23:33:44'),
(20, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 23:33:59', '2022-07-30 23:33:59'),
(21, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 23:53:27', '2022-07-30 23:53:27'),
(22, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 23:53:37', '2022-07-30 23:53:37'),
(23, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-30 23:53:51', '2022-07-30 23:53:51'),
(24, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 00:07:57', '2022-07-31 00:07:57'),
(25, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 00:31:21', '2022-07-31 00:31:21'),
(26, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 00:31:35', '2022-07-31 00:31:35'),
(27, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:01:00', '2022-07-31 01:01:00'),
(28, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:04:04', '2022-07-31 01:04:04'),
(29, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:04:17', '2022-07-31 01:04:17'),
(30, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:04:31', '2022-07-31 01:04:31'),
(31, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:05:21', '2022-07-31 01:05:21'),
(32, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:08:13', '2022-07-31 01:08:13'),
(33, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:08:27', '2022-07-31 01:08:27'),
(34, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:08:45', '2022-07-31 01:08:45'),
(35, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:10:58', '2022-07-31 01:10:58'),
(36, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:11:05', '2022-07-31 01:11:05'),
(37, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 01:11:23', '2022-07-31 01:11:23'),
(38, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:15:02', '2022-07-31 03:15:02'),
(39, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:20:24', '2022-07-31 03:20:24'),
(40, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:28:12', '2022-07-31 03:28:12'),
(41, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:28:22', '2022-07-31 03:28:22'),
(42, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:28:48', '2022-07-31 03:28:48'),
(43, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:31:31', '2022-07-31 03:31:31'),
(44, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:32:36', '2022-07-31 03:32:36'),
(45, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:34:34', '2022-07-31 03:34:34'),
(46, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 03:46:30', '2022-07-31 03:46:30'),
(47, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:15:28', '2022-07-31 04:15:28'),
(48, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:28:44', '2022-07-31 04:28:44'),
(49, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:33:24', '2022-07-31 04:33:24'),
(50, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:37:38', '2022-07-31 04:37:38'),
(51, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:46:36', '2022-07-31 04:46:36'),
(52, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-07-31 04:48:18', '2022-07-31 04:48:18'),
(53, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 02:03:13', '2022-08-01 02:03:13'),
(54, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 02:03:39', '2022-08-01 02:03:39'),
(55, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 02:04:28', '2022-08-01 02:04:28'),
(56, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 02:04:36', '2022-08-01 02:04:36'),
(57, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 02:49:11', '2022-08-01 02:49:11'),
(58, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 04:58:54', '2022-08-01 04:58:54'),
(59, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 05:04:13', '2022-08-01 05:04:13'),
(60, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 05:25:03', '2022-08-01 05:25:03'),
(61, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 05:28:35', '2022-08-01 05:28:35'),
(62, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 05:38:14', '2022-08-01 05:38:14'),
(63, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 05:52:44', '2022-08-01 05:52:44'),
(64, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 06:39:25', '2022-08-01 06:39:25'),
(65, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-01 07:03:05', '2022-08-01 07:03:05'),
(66, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-02 00:42:42', '2022-08-02 00:42:42'),
(67, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-02 01:07:22', '2022-08-02 01:07:22'),
(68, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-02 01:10:43', '2022-08-02 01:10:43'),
(69, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 2, '[]', '2022-08-02 01:16:54', '2022-08-02 01:16:54'),
(70, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-08-02 01:18:48', '2022-08-02 01:18:48'),
(71, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-08-02 01:21:44', '2022-08-02 01:21:44'),
(72, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-08-02 01:22:06', '2022-08-02 01:22:06'),
(73, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-08-02 01:22:53', '2022-08-02 01:22:53'),
(74, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(75, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 04:49:07', '2022-08-02 04:49:07'),
(76, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 05:57:38', '2022-08-02 05:57:38'),
(77, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 05:58:41', '2022-08-02 05:58:41'),
(78, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 06:03:29', '2022-08-02 06:03:29'),
(79, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 8, 'App\\Models\\User', 2, '[]', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(80, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 06:39:19', '2022-08-02 06:39:19'),
(81, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 06:44:27', '2022-08-02 06:44:27'),
(82, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 2, '[]', '2022-08-02 07:09:49', '2022-08-02 07:09:49'),
(83, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-08-02 07:10:59', '2022-08-02 07:10:59'),
(84, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 8, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:09', '2022-08-02 07:11:09'),
(85, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:11', '2022-08-02 07:11:11'),
(86, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:13', '2022-08-02 07:11:13'),
(87, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:16', '2022-08-02 07:11:16'),
(88, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(89, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:11:54', '2022-08-02 07:11:54'),
(90, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:14:35', '2022-08-02 07:14:35'),
(91, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:15:30', '2022-08-02 07:15:30'),
(92, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:16:19', '2022-08-02 07:16:19'),
(93, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:27:37', '2022-08-02 07:27:37'),
(94, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:52:33', '2022-08-02 07:52:33'),
(95, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:53:51', '2022-08-02 07:53:51'),
(96, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:54:46', '2022-08-02 07:54:46'),
(97, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-02 07:55:23', '2022-08-02 07:55:23'),
(98, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-08-03 23:38:52', '2022-08-03 23:38:52'),
(99, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-03 23:40:11', '2022-08-03 23:40:11'),
(100, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-03 23:41:08', '2022-08-03 23:41:08'),
(101, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-03 23:43:46', '2022-08-03 23:43:46'),
(102, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-03 23:53:14', '2022-08-03 23:53:14'),
(103, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 00:04:47', '2022-08-04 00:04:47'),
(104, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 01:45:13', '2022-08-04 01:45:13'),
(105, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 01:47:09', '2022-08-04 01:47:09'),
(106, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 01:47:34', '2022-08-04 01:47:34'),
(107, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 01:52:39', '2022-08-04 01:52:39'),
(108, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 01:52:54', '2022-08-04 01:52:54'),
(109, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 03:36:05', '2022-08-04 03:36:05'),
(110, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 03:40:17', '2022-08-04 03:40:17'),
(111, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 03:43:46', '2022-08-04 03:43:46'),
(112, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 03:51:57', '2022-08-04 03:51:57'),
(113, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:05:24', '2022-08-04 04:05:24'),
(114, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:11:12', '2022-08-04 04:11:12'),
(115, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:15:14', '2022-08-04 04:15:14'),
(116, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:30:49', '2022-08-04 04:30:49'),
(117, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:31:43', '2022-08-04 04:31:43'),
(118, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:32:33', '2022-08-04 04:32:33'),
(119, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:32:41', '2022-08-04 04:32:41'),
(120, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:33:32', '2022-08-04 04:33:32'),
(121, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:47:45', '2022-08-04 04:47:45'),
(122, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:51:39', '2022-08-04 04:51:39'),
(123, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:52:18', '2022-08-04 04:52:18'),
(124, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 04:52:43', '2022-08-04 04:52:43'),
(125, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:09:47', '2022-08-04 05:09:47'),
(126, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:13:15', '2022-08-04 05:13:15'),
(127, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:41:17', '2022-08-04 05:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `name`, `company_name`, `designation`, `description`, `phone`, `email`, `dob`, `address`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Toha Hossain', 'VMSL', 'CTO', NULL, '', NULL, NULL, '', 1, NULL, NULL, NULL),
(2, 0, 'Forhad', 'DCS', 'CEO', NULL, '', NULL, NULL, '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `concave_media`
--

CREATE TABLE `concave_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploaded_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concave_media`
--

INSERT INTO `concave_media` (`id`, `title`, `alt_text`, `description`, `file_url`, `thumbnail_url`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, NULL, 'media/62eb5cc464864.jpg', '/media/thumbnail/media/62eb5cc464864.jpg', 2, '2022-08-03 23:44:36', '2022-08-03 23:44:36'),
(2, '2', NULL, NULL, 'media/62eb5cc5192f3.jpg', '/media/thumbnail/media/62eb5cc5192f3.jpg', 2, '2022-08-03 23:44:37', '2022-08-03 23:44:37'),
(3, '3', NULL, NULL, 'media/62eb5cc55d1d7.jpg', '/media/thumbnail/media/62eb5cc55d1d7.jpg', 2, '2022-08-03 23:44:37', '2022-08-03 23:44:37'),
(4, '4', NULL, NULL, 'media/62eb5cc5a0e52.jpg', '/media/thumbnail/media/62eb5cc5a0e52.jpg', 2, '2022-08-03 23:44:37', '2022-08-03 23:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 1, NULL, NULL, NULL),
(2, 'App Development', 1, NULL, NULL, NULL),
(3, 'Graphics Design', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_from` datetime NOT NULL,
  `leave_to` datetime NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_id` int(11) NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_ac_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_ac_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_ac_routing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mfs_details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `name`, `designation`, `description`, `phone`, `dob`, `email`, `address`, `salary_id`, `nationality`, `religion`, `merital_status`, `passport_no`, `nid_no`, `emergency_contact_name`, `emergency_contact_phone`, `bank_name`, `bank_ac_name`, `bank_ac_no`, `bank_ac_routing`, `mfs_details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 104, 'Arif', 'Web Developer', '', '01711158729', '2022-08-02 15:46:15', '', '', 0, '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 104, 'Jakaria', 'Web Developer', '', '01758207025', '2022-08-02 15:46:15', '', '', 0, '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_experiences`
--

CREATE TABLE `member_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_27_193433_create_permission_tables', 1),
(6, '2022_07_27_193723_create_members_table', 1),
(7, '2022_07_27_193750_create_member_experiences_table', 1),
(8, '2022_07_27_193804_create_clients_table', 1),
(9, '2022_07_27_193839_create_projects_table', 1),
(10, '2022_07_27_193851_create_tasks_table', 1),
(11, '2022_07_27_193909_create_settings_table', 1),
(12, '2022_07_27_193937_create_departments_table', 1),
(13, '2022_07_27_193958_create_task_reports_table', 1),
(14, '2022_07_27_194235_create_holidays_table', 1),
(15, '2022_07_27_194514_create_salaries_table', 1),
(16, '2022_07_27_194603_create_payments_table', 1),
(17, '2022_07_27_194619_create_expenses_table', 1),
(18, '2022_07_27_194648_create_leave_requests_table', 1),
(19, '2022_07_28_052251_create_salary_elements_table', 1),
(20, '2022_07_28_062331_create_module_generators_table', 2),
(21, '2022_07_28_203205_create_activity_log_table', 3),
(22, '2021_11_10_020553_create_concave_media_table', 4),
(23, '2022_08_01_080131_create_statuses_table', 4);

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
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `module_generators`
--

CREATE TABLE `module_generators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `database_table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_table_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configuration` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_generators`
--

INSERT INTO `module_generators` (`id`, `module_title`, `module_description`, `controller_name`, `database_table_name`, `grid_table_type`, `configuration`, `permission_title`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Project', NULL, 'Project', 'projects', 'native', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"title\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Title\",\"format\":\"function\",\"format_value\":\"getTitleUppercase\",\"listview\":\"on\"},\"client_ids\":{\"relation_database\":\"clients\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Clients\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"member_ids\":{\"relation_database\":\"members\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Members\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"project_manager_id\":{\"relation_database\":\"members\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Project\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"total_hour\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Total Hour\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"deadline\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deadline\",\"format\":\"default\",\"format_value\":\"d M, h:ia\",\"listview\":\"on\"},\"total_worth\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Total Worth\",\"format\":\"default\",\"format_value\":null},\"srs\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"SRS\",\"format\":\"file\",\"format_value\":null,\"listview\":\"on\"},\"description\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Description\",\"format\":\"default\",\"format_value\":null},\"related_documents\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Related Documents\",\"format\":\"multipleimage\",\"format_value\":null,\"listview\":\"on\"},\"department_id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Department Id\",\"format\":\"default\",\"format_value\":null},\"is_deleted\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Is Deleted\",\"format\":\"default\",\"format_value\":null},\"status\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"title\":{\"field_key\":\"title\",\"field_name\":\"Title\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"client_ids\":{\"field_key\":\"client_ids\",\"field_name\":\"Client ids\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"clients\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":\"company_name\",\"relation_database_display3\":\"designation\",\"allow_multiple\":\"on\",\"validation\":null},\"member_ids\":{\"field_key\":\"member_ids\",\"field_name\":\"Member ids\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"members\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"project_manager_id\":{\"field_key\":\"project_manager_id\",\"field_name\":\"Project manager\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"members\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"total_hour\":{\"field_key\":\"total_hour\",\"field_name\":\"Total hour\",\"type\":\"number\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deadline\":{\"field_key\":\"deadline\",\"field_name\":\"Deadline\",\"type\":\"datetime\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"total_worth\":{\"field_key\":\"total_worth\",\"field_name\":\"Total worth\",\"type\":\"number\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"srs\":{\"field_key\":\"srs\",\"field_name\":\"Srs\",\"type\":\"image\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"description\":{\"field_key\":\"description\",\"field_name\":\"Description\",\"type\":\"textareawitheditor\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"related_documents\":{\"field_key\":\"related_documents\",\"field_name\":\"Related documents\",\"type\":\"multipleimages\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"department_id\":{\"field_key\":\"department_id\",\"field_name\":\"Department id\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"departments\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"is_deleted\":{\"field_key\":\"is_deleted\",\"field_name\":\"Is deleted\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"statuses\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'project', 1, '2022-08-03 23:40:11', '2022-08-04 05:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(2, 'dashboard.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(3, 'dashboard.update', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(4, 'dashboard.delete', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(5, 'projectdashboard.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(6, 'projectdashboard.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(7, 'projectdashboard.update', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(8, 'projectdashboard.delete', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(9, 'role.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(10, 'role.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(11, 'role.update', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(12, 'role.delete', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(13, 'settings.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(14, 'settings.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(15, 'settings.update', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(16, 'settings.delete', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(17, 'module.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(18, 'module.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(19, 'module.update', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(20, 'module.delete', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(21, 'cache.view', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(22, 'cache.create', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(23, 'payment.view', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(24, 'payment.create', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(25, 'payment.update', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(26, 'payment.delete', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(27, 'payment.export', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(28, 'payment.import', 'web', '2022-08-02 03:01:30', '2022-08-02 03:01:30'),
(29, 'status.view', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(30, 'status.create', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(31, 'status.update', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(32, 'status.delete', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(33, 'status.import', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(34, 'status.export', 'web', '2022-08-02 04:58:04', '2022-08-02 04:58:04'),
(35, 'department.view', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(36, 'department.create', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(37, 'department.update', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(38, 'department.delete', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(39, 'department.export', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(40, 'department.import', 'web', '2022-08-02 06:10:35', '2022-08-02 06:10:35'),
(41, 'project.view', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(42, 'project.create', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(43, 'project.update', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(44, 'project.delete', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(45, 'project.export', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(46, 'project.import', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40');

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

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_manager_id` int(11) NOT NULL,
  `total_hour` int(11) NOT NULL,
  `deadline` datetime NOT NULL,
  `total_worth` int(11) NOT NULL,
  `srs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `client_ids`, `member_ids`, `project_manager_id`, `total_hour`, `deadline`, `total_worth`, `srs`, `description`, `related_documents`, `department_id`, `is_deleted`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdf', 'sdfs', 'dfsdf', 0, 0, '2022-07-30 13:45:06', 0, '', 'hello project', NULL, 0, 0, 1, NULL, NULL, '2022-08-03 23:55:05'),
(4, 'method', 'sdfs', 'dfsdf', 0, 0, '2022-07-30 13:45:06', 0, '', NULL, NULL, 0, 0, 1, NULL, NULL, '2022-08-03 23:55:02'),
(5, 'mof', 'sdfs', 'dfsdf', 0, 0, '2022-07-30 13:45:06', 0, '', NULL, NULL, 0, 0, 1, NULL, NULL, '2022-08-03 23:54:59'),
(7, 'Clean Room', '1,2', '2', 1, 400, '2022-09-29 11:58:00', 500000, 'media/62eb5cc5a0e52.jpg', '<p>Clean Room fastly, Very Fast</p>', 'media/62eb5cc5a0e52.jpg,media/62eb5cc55d1d7.jpg', 3, 0, 1, NULL, '2022-08-03 23:54:53', '2022-08-04 04:53:09');

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
(1, 'superadmin', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(2, 'admin', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(3, 'member', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(4, 'accountant', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(5, 'hrm', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(6, 'client', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29');

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
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `salary_breakdown` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_salary` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_elements`
--

CREATE TABLE `salary_elements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, 1, NULL, NULL),
(3, 'Inactive', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assaigned_member_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `total_hour` int(11) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_reports`
--

CREATE TABLE `task_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` int(11) NOT NULL,
  `total_hour` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'concaveit', 'concaveit@gmail.com', '01711158729', NULL, '$2y$10$Es2lxu6M.RyOwJIGxg/hYuLuoQz57zyhT5Pei4pheHo5JVAl3Uyi6', NULL, '2022-07-30 04:08:11', '2022-07-30 04:08:11');

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concave_media`
--
ALTER TABLE `concave_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_experiences`
--
ALTER TABLE `member_experiences`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `module_generators`
--
ALTER TABLE `module_generators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_elements`
--
ALTER TABLE `salary_elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_reports`
--
ALTER TABLE `task_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `concave_media`
--
ALTER TABLE `concave_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_experiences`
--
ALTER TABLE `member_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `module_generators`
--
ALTER TABLE `module_generators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_elements`
--
ALTER TABLE `salary_elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_reports`
--
ALTER TABLE `task_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
