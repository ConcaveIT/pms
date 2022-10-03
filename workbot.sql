-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 10:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
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
(127, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:41:17', '2022-08-04 05:41:17'),
(128, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:44:10', '2022-08-04 05:44:10'),
(129, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-08-04 05:45:25', '2022-08-04 05:45:25'),
(130, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-07 00:03:48', '2022-08-07 00:03:48'),
(131, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-07 00:04:03', '2022-08-07 00:04:03'),
(132, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-07 00:04:21', '2022-08-07 00:04:21'),
(133, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-07 05:09:11', '2022-08-07 05:09:11'),
(134, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:33:24', '2022-08-12 23:33:24'),
(135, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:35:28', '2022-08-12 23:35:28'),
(136, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:36:03', '2022-08-12 23:36:03'),
(137, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:37:23', '2022-08-12 23:37:23'),
(138, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:37:45', '2022-08-12 23:37:45'),
(139, 'default', 'Model data has been deleted', 'App\\Models\\ModuleGenerator', 2, 'App\\Models\\User', 2, '[]', '2022-08-12 23:44:09', '2022-08-12 23:44:09'),
(140, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-12 23:44:48', '2022-08-12 23:44:48'),
(141, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-12 23:45:50', '2022-08-12 23:45:50'),
(142, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-12 23:48:58', '2022-08-12 23:48:58'),
(143, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 1, 'App\\Models\\User', 2, '[]', '2022-08-12 23:49:42', '2022-08-12 23:49:42'),
(144, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(145, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 03:59:28', '2022-08-18 03:59:28'),
(146, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 05:09:24', '2022-08-18 05:09:24'),
(147, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 05:27:49', '2022-08-18 05:27:49'),
(148, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 05:28:11', '2022-08-18 05:28:11'),
(149, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:15:45', '2022-08-18 06:15:45'),
(150, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:16:08', '2022-08-18 06:16:08'),
(151, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:16:25', '2022-08-18 06:16:25'),
(152, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:18:08', '2022-08-18 06:18:08'),
(153, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:21:34', '2022-08-18 06:21:34'),
(154, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:26:27', '2022-08-18 06:26:27'),
(155, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:28:04', '2022-08-18 06:28:04'),
(156, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 3, 'App\\Models\\User', 2, '[]', '2022-08-18 06:28:55', '2022-08-18 06:28:55'),
(157, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 2, '[]', '2022-09-02 22:14:46', '2022-09-02 22:14:46'),
(158, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 2, '[]', '2022-09-02 22:15:45', '2022-09-02 22:15:45'),
(159, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 4, 'App\\Models\\User', 2, '[]', '2022-09-02 22:17:35', '2022-09-02 22:17:35'),
(160, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(161, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:30:17', '2022-09-02 22:30:17'),
(162, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:43:40', '2022-09-02 22:43:40'),
(163, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:43:50', '2022-09-02 22:43:50'),
(164, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:45:03', '2022-09-02 22:45:03'),
(165, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(166, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-09-02 22:46:48', '2022-09-02 22:46:48'),
(167, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-09-02 22:49:01', '2022-09-02 22:49:01'),
(168, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(169, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-09-02 22:50:27', '2022-09-02 22:50:27'),
(170, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-09-02 22:51:43', '2022-09-02 22:51:43'),
(171, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 7, 'App\\Models\\User', 2, '[]', '2022-09-02 22:52:34', '2022-09-02 22:52:34'),
(172, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 6, 'App\\Models\\User', 2, '[]', '2022-09-02 22:53:20', '2022-09-02 22:53:20'),
(173, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 5, 'App\\Models\\User', 2, '[]', '2022-09-02 22:56:36', '2022-09-02 22:56:36'),
(174, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 8, 'App\\Models\\User', 2, '[]', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(175, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(176, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 10, 'App\\Models\\User', 2, '[]', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(177, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 11, 'App\\Models\\User', 2, '[]', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(178, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 12, 'App\\Models\\User', 2, '[]', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(179, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 13, 'App\\Models\\User', 2, '[]', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(180, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 14, 'App\\Models\\User', 2, '[]', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(181, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 15, 'App\\Models\\User', 2, '[]', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(182, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 16, 'App\\Models\\User', 2, '[]', '2022-10-02 01:02:10', '2022-10-02 01:02:10'),
(183, 'default', 'Model data has been created', 'App\\Models\\ModuleGenerator', 17, 'App\\Models\\User', 2, '[]', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(184, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-10-03 14:52:08', '2022-10-03 14:52:08'),
(185, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-10-03 14:52:31', '2022-10-03 14:52:31'),
(186, 'default', 'Model data has been updated', 'App\\Models\\ModuleGenerator', 9, 'App\\Models\\User', 2, '[]', '2022-10-03 14:53:17', '2022-10-03 14:53:17');

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
(4, '4', NULL, NULL, 'media/62eb5cc5a0e52.jpg', '/media/thumbnail/media/62eb5cc5a0e52.jpg', 2, '2022-08-03 23:44:37', '2022-08-03 23:44:37'),
(5, 'Avatar-Profile-PNG-Picture', NULL, NULL, 'media/62f73a6cf4155.png', '/media/thumbnail/media/62f73a6cf4155.png', 2, '2022-08-12 23:45:17', '2022-08-12 23:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `core_menu`
--

CREATE TABLE `core_menu` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `access_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_guest` int(11) DEFAULT 0,
  `menu_lang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_menu`
--

INSERT INTO `core_menu` (`menu_id`, `parent_id`, `module`, `url`, `menu_name`, `menu_type`, `role_id`, `deep`, `ordering`, `position`, `menu_icons`, `active`, `access_data`, `allow_guest`, `menu_lang`, `created_at`, `updated_at`) VALUES
(1, 0, 'members', NULL, 'Members', 'internal', NULL, NULL, 0, 'sidebar', 'icofont-ui-user-group', 1, '{\"1\":\"1\",\"2\":\"1\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 1, NULL, '2022-09-02 23:57:57', '2022-09-02 23:57:57'),
(2, 0, 'status', NULL, 'Status', 'internal', NULL, NULL, 14, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(3, 0, 'payments', NULL, 'payments', 'internal', NULL, NULL, 3, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(4, 0, 'settings', NULL, 'Settings', 'internal', NULL, NULL, 4, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(5, 0, 'salary', NULL, 'Salary', 'internal', NULL, NULL, 5, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(6, 5, 'salaryelements', NULL, 'Salary Elements', 'internal', NULL, NULL, 0, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', NULL, NULL, '2022-10-03 14:28:56', '2022-10-03 14:39:48'),
(7, 0, 'clients', NULL, 'Clients', 'internal', NULL, NULL, 6, 'sidebar', 'icofont-book', 1, '{\"1\":\"1\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', NULL, NULL, '2022-10-03 14:28:56', '2022-10-03 14:40:45'),
(8, 0, 'departments', NULL, 'Departments', 'internal', NULL, NULL, 7, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(9, 0, 'expenses', NULL, 'Expenses', 'internal', NULL, NULL, 8, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(10, 0, 'holidays', NULL, 'Holidays', 'internal', NULL, NULL, 9, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(11, 0, 'leaverequests', NULL, 'Leave Requests', 'internal', NULL, NULL, 10, 'sidebar', 'icofont-book', 1, '{\"1\":\"1\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', NULL, NULL, '2022-10-03 14:28:56', '2022-10-03 14:40:58'),
(12, 1, 'memberexperiences', NULL, 'Member Experiences', 'internal', NULL, NULL, 0, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', NULL, NULL, '2022-10-03 14:28:56', '2022-10-03 14:35:39'),
(13, 0, 'projects', NULL, 'Projects', 'internal', NULL, NULL, 11, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(14, 15, 'taskreports', NULL, 'Task Reports', 'internal', NULL, NULL, 0, 'sidebar', 'icofont-book', 1, '{\"1\":\"1\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', NULL, NULL, '2022-10-03 14:28:56', '2022-10-03 14:40:36'),
(15, 0, 'tasks', NULL, 'Tasks', 'internal', NULL, NULL, 12, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56'),
(16, 0, 'users', NULL, 'Users', 'internal', NULL, NULL, 13, 'sidebar', 'icofont-book', 1, '{\"1\":\"0\",\"2\":\"0\",\"3\":\"0\",\"4\":\"0\",\"5\":\"0\",\"6\":\"0\",\"7\":\"0\"}', 0, NULL, '2022-10-03 14:28:56', '2022-10-03 14:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_of_department` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `head_of_department`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '4', 1, NULL, NULL, '2022-08-12 23:38:20'),
(2, 'App Development', NULL, 1, NULL, NULL, NULL),
(3, 'Graphics Design', NULL, 1, NULL, NULL, NULL);

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `menu_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(21, '2022_07_28_203205_create_activity_log_table', 3),
(22, '2021_11_10_020553_create_concave_media_table', 4),
(25, '2022_07_28_062331_create_module_generators_table', 5),
(26, '2022_08_01_080131_create_statuses_table', 5),
(27, '2022_08_07_083627_create_product_table', 6),
(28, '2022_08_09_071515_create_menu_table', 6),
(29, '2022_09_03_052646_core_menu', 6);

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
  `permission_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `softdelete` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_generators`
--

INSERT INTO `module_generators` (`id`, `module_title`, `module_description`, `controller_name`, `database_table_name`, `grid_table_type`, `configuration`, `permission_title`, `softdelete`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Status', NULL, 'Status', 'statuses', 'native', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"title\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Title\",\"format\":\"function\",\"format_value\":\"getUppercase:arg1:arg2:arg3\",\"listview\":\"on\"},\"status\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"title\":{\"field_key\":\"title\",\"field_name\":\"Title\",\"type\":\"multipleimages\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'status', 0, 1, '2022-08-07 00:03:48', '2022-08-12 23:49:42'),
(3, 'payments', 'payments', 'payments', 'payments', 'datatable', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"project_id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Project Details\",\"format\":\"image\",\"format_value\":null,\"listview\":\"on\"},\"payment_date\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Payment Date\",\"format\":\"datetime\",\"format_value\":\"y-m-d h:ia\",\"listview\":\"on\"},\"amount\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Amount\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"status\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"project_id\":{\"field_key\":\"project_id\",\"field_name\":\"Project id\",\"type\":\"image\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"payment_date\":{\"field_key\":\"payment_date\",\"field_name\":\"Payment date\",\"type\":\"date\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"amount\":{\"field_key\":\"amount\",\"field_name\":\"Amount\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'payments', 0, 1, '2022-08-18 03:59:11', '2022-08-18 06:28:55'),
(4, 'Settings', 'Website Settings', 'Settings', 'settings', 'datatable', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"meta_key\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Settings Key\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"meta_value\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Settings Value\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"status\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created Time\",\"format\":\"datetime\",\"format_value\":\"d M, h:ia\",\"listview\":\"on\"},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"meta_key\":{\"field_key\":\"meta_key\",\"field_name\":\"Settings key\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required | unique:settings\"},\"meta_value\":{\"field_key\":\"meta_value\",\"field_name\":\"Settings value\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'settings', 0, 1, '2022-09-02 22:14:46', '2022-09-02 22:17:35'),
(5, 'Members', 'View Members', 'Members', 'members', 'native', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"user_id\":{\"relation_database\":\"users\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"User\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"name\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Name\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"designation\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Designation\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"description\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Description\",\"format\":\"default\",\"format_value\":null},\"phone\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Phone\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"dob\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Dob\",\"format\":\"default\",\"format_value\":null},\"email\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Email\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"address\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Address\",\"format\":\"default\",\"format_value\":null},\"salary_id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Salary Id\",\"format\":\"default\",\"format_value\":null},\"nationality\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Nationality\",\"format\":\"default\",\"format_value\":null},\"religion\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Religion\",\"format\":\"default\",\"format_value\":null},\"merital_status\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Merital Status\",\"format\":\"default\",\"format_value\":null},\"passport_no\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Passport No\",\"format\":\"default\",\"format_value\":null},\"nid_no\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Nid No\",\"format\":\"default\",\"format_value\":null},\"emergency_contact_name\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Emergency Contact Name\",\"format\":\"default\",\"format_value\":null},\"emergency_contact_phone\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Emergency Contact Phone\",\"format\":\"default\",\"format_value\":null},\"bank_name\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Bank Name\",\"format\":\"default\",\"format_value\":null},\"bank_ac_name\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Bank Ac Name\",\"format\":\"default\",\"format_value\":null},\"bank_ac_no\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Bank Ac No\",\"format\":\"default\",\"format_value\":null},\"bank_ac_routing\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Bank Ac Routing\",\"format\":\"default\",\"format_value\":null},\"mfs_details\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Mfs Details\",\"format\":\"default\",\"format_value\":null},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"user_id\":{\"field_key\":\"user_id\",\"field_name\":\"User\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"users\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":\"phone\",\"relation_database_display3\":null,\"validation\":\"required\"},\"name\":{\"field_key\":\"name\",\"field_name\":\"Name\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"designation\":{\"field_key\":\"designation\",\"field_name\":\"Designation\",\"type\":\"text\",\"data_type\":\"database\",\"relation_database\":\"departments\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"description\":{\"field_key\":\"description\",\"field_name\":\"Description\",\"type\":\"textareawitheditor\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"phone\":{\"field_key\":\"phone\",\"field_name\":\"Phone\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"dob\":{\"field_key\":\"dob\",\"field_name\":\"Date of Birth\",\"type\":\"date\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"email\":{\"field_key\":\"email\",\"field_name\":\"Email\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"email\"},\"address\":{\"field_key\":\"address\",\"field_name\":\"Address\",\"type\":\"textarea\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"salary_id\":{\"field_key\":\"salary_id\",\"field_name\":\"Salary id\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"salaries\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"user_id\",\"relation_database_display2\":\"total_salary\",\"relation_database_display3\":null,\"validation\":null},\"nationality\":{\"field_key\":\"nationality\",\"field_name\":\"Nationality\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"religion\":{\"field_key\":\"religion\",\"field_name\":\"Religion\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"merital_status\":{\"field_key\":\"merital_status\",\"field_name\":\"Merital status\",\"type\":\"select\",\"data_type\":\"custom\",\"0\":{\"custom_data\":\"married\"},\"1\":{\"custom_data\":\"unmarried\"},\"2\":{\"custom_data\":\"other\"},\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"passport_no\":{\"field_key\":\"passport_no\",\"field_name\":\"Passport No.\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"nid_no\":{\"field_key\":\"nid_no\",\"field_name\":\"Nid No.\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"emergency_contact_name\":{\"field_key\":\"emergency_contact_name\",\"field_name\":\"Emergency Contact Name\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"emergency_contact_phone\":{\"field_key\":\"emergency_contact_phone\",\"field_name\":\"Emergency Contact Phone\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"bank_name\":{\"field_key\":\"bank_name\",\"field_name\":\"Bank Name\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"bank_ac_name\":{\"field_key\":\"bank_ac_name\",\"field_name\":\"Bank A\\/C Name\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"bank_ac_no\":{\"field_key\":\"bank_ac_no\",\"field_name\":\"Bank A\\/C No.\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"bank_ac_routing\":{\"field_key\":\"bank_ac_routing\",\"field_name\":\"Bank A\\/C Routing No.\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"mfs_details\":{\"field_key\":\"mfs_details\",\"field_name\":\"MFS Details\",\"type\":\"textarea\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'members', 1, 1, '2022-09-02 22:26:46', '2022-09-02 22:56:36'),
(6, 'Salary', 'View Salary', 'Salary', 'salaries', 'native', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"user_id\":{\"relation_database\":\"users\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":\"phone\",\"relation_database_display3\":null,\"field_name\":\"User\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"salary_breakdown\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Salary Breakdown\",\"format\":\"default\",\"format_value\":null},\"total_salary\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Total Salary\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"status\":{\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"user_id\":{\"field_key\":\"user_id\",\"field_name\":\"User\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"users\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":\"phone\",\"relation_database_display3\":null,\"validation\":\"required\"},\"salary_breakdown\":{\"field_key\":\"salary_breakdown\",\"field_name\":\"Salary Breakdown\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"salary_elements\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"allow_multiple\":\"on\",\"validation\":null},\"total_salary\":{\"field_key\":\"total_salary\",\"field_name\":\"Total salary\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'salary', 1, 1, '2022-09-02 22:46:04', '2022-09-02 22:53:20'),
(7, 'Salary Elements', 'View SalaryElements', 'SalaryElements', 'salary_elements', 'native', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"title\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Title\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"status\":{\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"title\":{\"field_key\":\"title\",\"field_name\":\"Title\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":\"required\"},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"select\",\"data_type\":\"database\",\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"primary\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'salaryelements', 1, 1, '2022-09-02 22:50:11', '2022-09-02 22:52:34'),
(8, 'Clients', NULL, 'Clients', 'clients', 'native', '', 'Clients', 1, 1, '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(9, 'Departments', NULL, 'Departments', 'departments', 'datatable', '{\"table_configuration\":{\"id\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Id\",\"format\":\"default\",\"format_value\":null},\"title\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Title\",\"format\":\"default\",\"format_value\":null,\"listview\":\"on\"},\"head_of_department\":{\"relation_database\":\"users\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"name\",\"relation_database_display2\":\"phone\",\"relation_database_display3\":null,\"field_name\":\"Head Of Department\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"status\":{\"relation_database\":\"statuses\",\"relation_database_key\":\"id\",\"relation_database_display1\":\"title\",\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Status\",\"format\":\"select\",\"format_value\":null,\"listview\":\"on\"},\"deleted_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Deleted At\",\"format\":\"default\",\"format_value\":null},\"created_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Created At\",\"format\":\"default\",\"format_value\":null},\"updated_at\":{\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"field_name\":\"Updated At\",\"format\":\"default\",\"format_value\":null}},\"form_configuration\":{\"id\":{\"field_key\":\"id\",\"field_name\":\"Id\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"title\":{\"field_key\":\"title\",\"field_name\":\"Title\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"head_of_department\":{\"field_key\":\"head_of_department\",\"field_name\":\"Head of department\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"status\":{\"field_key\":\"status\",\"field_name\":\"Status\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"deleted_at\":{\"field_key\":\"deleted_at\",\"field_name\":\"Deleted at\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"created_at\":{\"field_key\":\"created_at\",\"field_name\":\"Created at\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null},\"updated_at\":{\"field_key\":\"updated_at\",\"field_name\":\"Updated at\",\"type\":\"text\",\"relation_database_key\":null,\"relation_database_display1\":null,\"relation_database_display2\":null,\"relation_database_display3\":null,\"validation\":null}}}', 'Departments', 1, 1, '2022-10-02 00:53:15', '2022-10-03 14:53:17'),
(10, 'Expenses', 'Expenses', 'Expenses', 'expenses', 'native', '', 'Expenses', 1, 1, '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(11, 'Holidays', 'Holidays', 'Holidays', 'holidays', 'datatable', '', 'Holidays', 1, 1, '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(12, 'Leave Requests', 'Leave Requests', 'LeaveRequests', 'leave_requests', 'datatable', '', 'LeaveRequests', 1, 1, '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(13, 'Member Experiences', 'Member Experiences', 'MemberExperiences', 'member_experiences', 'datatable', '', 'MemberExperiences', 1, 1, '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(14, 'Projects', 'Projects', 'Projects', 'projects', 'datatable', '', 'Projects', 1, 1, '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(15, 'Task Reports', 'Task Reports', 'TaskReports', 'task_reports', 'datatable', '', 'TaskReports', 1, 1, '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(16, 'Tasks', 'Tasks', 'Tasks', 'tasks', 'datatable', '', 'Tasks', 1, 1, '2022-10-02 01:02:10', '2022-10-02 01:02:10'),
(17, 'Users', 'Users', 'Users', 'users', 'datatable', '', 'Users', 1, 1, '2022-10-02 01:03:03', '2022-10-02 01:03:03');

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
  `project_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `project_id`, `payment_date`, `amount`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'media/62eb5cc5a0e52.jpg', '2022-08-31 00:00:00', 250, 1, NULL, NULL, '2022-08-18 06:28:31'),
(2, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(3, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(4, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(5, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(6, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(7, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(8, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(9, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(10, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(11, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(12, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(13, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(14, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(15, '1', '2022-08-18 11:59:58', 350, 1, NULL, NULL, NULL),
(16, '1', '2022-08-18 11:59:58', 111, 1, NULL, NULL, NULL),
(17, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(18, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(19, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(20, '1', '2022-08-18 11:59:58', 900, 1, NULL, NULL, NULL),
(21, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(22, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(23, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(24, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(25, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(26, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(27, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(28, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(29, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(30, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(31, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL),
(32, '1', '2022-08-18 11:59:58', 250, 1, NULL, NULL, NULL);

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
(46, 'project.import', 'web', '2022-08-02 07:11:40', '2022-08-02 07:11:40'),
(47, 'payments.view', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(48, 'payments.create', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(49, 'payments.update', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(50, 'payments.delete', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(51, 'payments.export', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(52, 'payments.import', 'web', '2022-08-18 03:59:11', '2022-08-18 03:59:11'),
(53, 'settings.export', 'web', '2022-09-02 22:14:46', '2022-09-02 22:14:46'),
(54, 'settings.import', 'web', '2022-09-02 22:14:46', '2022-09-02 22:14:46'),
(55, 'members.view', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(56, 'members.create', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(57, 'members.update', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(58, 'members.delete', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(59, 'members.export', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(60, 'members.import', 'web', '2022-09-02 22:26:46', '2022-09-02 22:26:46'),
(61, 'salary.view', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(62, 'salary.create', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(63, 'salary.update', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(64, 'salary.delete', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(65, 'salary.export', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(66, 'salary.import', 'web', '2022-09-02 22:46:04', '2022-09-02 22:46:04'),
(67, 'salaryelements.view', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(68, 'salaryelements.create', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(69, 'salaryelements.update', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(70, 'salaryelements.delete', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(71, 'salaryelements.export', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(72, 'salaryelements.import', 'web', '2022-09-02 22:50:11', '2022-09-02 22:50:11'),
(73, 'Clients.view', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(74, 'Clients.create', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(75, 'Clients.update', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(76, 'Clients.delete', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(77, 'Clients.export', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(78, 'Clients.import', 'web', '2022-10-02 00:52:33', '2022-10-02 00:52:33'),
(79, 'Departments.view', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(80, 'Departments.create', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(81, 'Departments.update', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(82, 'Departments.delete', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(83, 'Departments.export', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(84, 'Departments.import', 'web', '2022-10-02 00:53:15', '2022-10-02 00:53:15'),
(85, 'Expenses.view', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(86, 'Expenses.create', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(87, 'Expenses.update', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(88, 'Expenses.delete', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(89, 'Expenses.export', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(90, 'Expenses.import', 'web', '2022-10-02 00:54:22', '2022-10-02 00:54:22'),
(91, 'Holidays.view', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(92, 'Holidays.create', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(93, 'Holidays.update', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(94, 'Holidays.delete', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(95, 'Holidays.export', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(96, 'Holidays.import', 'web', '2022-10-02 00:57:58', '2022-10-02 00:57:58'),
(97, 'LeaveRequests.view', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(98, 'LeaveRequests.create', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(99, 'LeaveRequests.update', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(100, 'LeaveRequests.delete', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(101, 'LeaveRequests.export', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(102, 'LeaveRequests.import', 'web', '2022-10-02 00:59:00', '2022-10-02 00:59:00'),
(103, 'MemberExperiences.view', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(104, 'MemberExperiences.create', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(105, 'MemberExperiences.update', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(106, 'MemberExperiences.delete', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(107, 'MemberExperiences.export', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(108, 'MemberExperiences.import', 'web', '2022-10-02 00:59:40', '2022-10-02 00:59:40'),
(109, 'Projects.view', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(110, 'Projects.create', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(111, 'Projects.update', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(112, 'Projects.delete', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(113, 'Projects.export', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(114, 'Projects.import', 'web', '2022-10-02 01:00:36', '2022-10-02 01:00:36'),
(115, 'TaskReports.view', 'web', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(116, 'TaskReports.create', 'web', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(117, 'TaskReports.update', 'web', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(118, 'TaskReports.delete', 'web', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(119, 'TaskReports.export', 'web', '2022-10-02 01:01:32', '2022-10-02 01:01:32'),
(120, 'TaskReports.import', 'web', '2022-10-02 01:01:33', '2022-10-02 01:01:33'),
(121, 'Tasks.view', 'web', '2022-10-02 01:02:10', '2022-10-02 01:02:10'),
(122, 'Tasks.create', 'web', '2022-10-02 01:02:11', '2022-10-02 01:02:11'),
(123, 'Tasks.update', 'web', '2022-10-02 01:02:11', '2022-10-02 01:02:11'),
(124, 'Tasks.delete', 'web', '2022-10-02 01:02:11', '2022-10-02 01:02:11'),
(125, 'Tasks.export', 'web', '2022-10-02 01:02:11', '2022-10-02 01:02:11'),
(126, 'Tasks.import', 'web', '2022-10-02 01:02:11', '2022-10-02 01:02:11'),
(127, 'Users.view', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(128, 'Users.create', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(129, 'Users.update', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(130, 'Users.delete', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(131, 'Users.export', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(132, 'Users.import', 'web', '2022-10-02 01:03:03', '2022-10-02 01:03:03'),
(133, 'status.view,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(134, 'status.create,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(135, 'status.update,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(136, 'status.delete,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(137, 'payments.view,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(138, 'payments.create,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(139, 'payments.update,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(140, 'payments.delete,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(141, 'settings.view,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(142, 'settings.create,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(143, 'settings.update,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(144, 'settings.delete,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(145, 'members.view,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(146, 'members.create,', 'web', '2022-10-03 14:50:26', '2022-10-03 14:50:26'),
(147, 'members.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(148, 'members.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(149, 'salary.view,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(150, 'salary.create,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(151, 'salary.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(152, 'salary.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(153, 'salaryelements.view,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(154, 'salaryelements.create,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(155, 'salaryelements.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(156, 'salaryelements.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(157, 'Clients.view,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(158, 'Clients.create,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(159, 'Clients.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(160, 'Clients.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(161, 'Departments.view,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(162, 'Departments.create,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(163, 'Departments.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(164, 'Departments.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(165, 'Expenses.view,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(166, 'Expenses.create,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(167, 'Expenses.update,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(168, 'Expenses.delete,', 'web', '2022-10-03 14:50:27', '2022-10-03 14:50:27'),
(169, 'Holidays.view,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(170, 'Holidays.create,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(171, 'Holidays.update,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(172, 'Holidays.delete,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(173, 'LeaveRequests.view,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(174, 'LeaveRequests.create,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(175, 'LeaveRequests.update,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(176, 'LeaveRequests.delete,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(177, 'MemberExperiences.view,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(178, 'MemberExperiences.create,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(179, 'MemberExperiences.update,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(180, 'MemberExperiences.delete,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(181, 'Projects.view,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(182, 'Projects.create,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(183, 'Projects.update,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(184, 'Projects.delete,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(185, 'TaskReports.view,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(186, 'TaskReports.create,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(187, 'TaskReports.update,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(188, 'TaskReports.delete,', 'web', '2022-10-03 14:50:28', '2022-10-03 14:50:28'),
(189, 'Tasks.view,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(190, 'Tasks.create,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(191, 'Tasks.update,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(192, 'Tasks.delete,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(193, 'Users.view,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(194, 'Users.create,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(195, 'Users.update,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29'),
(196, 'Users.delete,', 'web', '2022-10-03 14:50:29', '2022-10-03 14:50:29');

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
(6, 'client', 'web', '2022-08-02 01:05:29', '2022-08-02 01:05:29'),
(7, 'api', 'web', '2022-08-07 00:07:49', '2022-08-07 00:07:49');

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
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(29, 1),
(29, 7),
(30, 1),
(30, 7),
(31, 1),
(31, 7),
(32, 1),
(32, 7),
(33, 1),
(33, 2),
(33, 7),
(34, 1),
(34, 2),
(34, 7),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
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
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1);

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

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `salary_breakdown`, `total_salary`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, '2,3', 76000, 1, NULL, '2022-09-02 22:55:34', '2022-09-02 22:55:34');

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

--
-- Dumping data for table `salary_elements`
--

INSERT INTO `salary_elements` (`id`, `title`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 1, NULL, '2022-09-02 22:54:37', '2022-09-02 22:54:37'),
(2, 'House Rent', 1, NULL, '2022-09-02 22:54:44', '2022-09-02 22:54:44'),
(3, 'Mobile Bill', 1, NULL, '2022-09-02 22:54:54', '2022-09-02 22:54:54');

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

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_key`, `meta_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'application_name', 'WorkBot', 1, '2022-09-02 22:21:20', '2022-09-02 22:21:20'),
(2, 'application_logo', '/uploads/logo/logo.png', 1, '2022-09-02 22:24:06', '2022-09-02 22:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Active', 1, '2022-08-07 00:05:57', '2022-08-07 00:06:22'),
(2, 'Inactive', 1, '2022-08-07 00:06:05', '2022-08-07 00:06:05');

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
(2, 'concaveit', 'concaveit@gmail.com', '01711158729', NULL, '$2y$10$Es2lxu6M.RyOwJIGxg/hYuLuoQz57zyhT5Pei4pheHo5JVAl3Uyi6', NULL, '2022-07-30 04:08:11', '2022-07-30 04:08:11'),
(4, 'API USER', 'api@gmail.com', '01758207025', NULL, '$2y$10$Es2lxu6M.RyOwJIGxg/hYuLuoQz57zyhT5Pei4pheHo5JVAl3Uyi6', NULL, '2022-07-30 04:08:11', '2022-07-30 04:08:11');

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
-- Indexes for table `core_menu`
--
ALTER TABLE `core_menu`
  ADD PRIMARY KEY (`menu_id`);

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `concave_media`
--
ALTER TABLE `concave_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `core_menu`
--
ALTER TABLE `core_menu`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `module_generators`
--
ALTER TABLE `module_generators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salary_elements`
--
ALTER TABLE `salary_elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
