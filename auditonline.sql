-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_plans`
--

CREATE TABLE `action_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheet_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `send_to` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `action_plan_answers`
--

CREATE TABLE `action_plan_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_sub_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `action_plan_subs`
--

CREATE TABLE `action_plan_subs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artifact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adverse_bukets`
--

CREATE TABLE `adverse_bukets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AGRMNTID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCTFLAG` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCTFLAG_Q` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BRANCH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month2_BOM_BUCKET` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month1_BOM_BUCKET` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_BOM_BUCKET` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month2_BOM_POS` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month1_BOM_POS` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_BOM_POS` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month2_Agency_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month1_Agency_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_Agency_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month2_Agent_Code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_month1_Agent_Code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_Agent_Code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Repeat_Agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Buket_Match_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POS_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Formula9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addresss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agency_repos`
--

CREATE TABLE `agency_repos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agency_repo_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agency_repo_users`
--

CREATE TABLE `agency_repo_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allocations`
--

CREATE TABLE `allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sheet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artifacts`
--

CREATE TABLE `artifacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sheet_id` int(11) DEFAULT NULL,
  `parameter_id` int(11) DEFAULT NULL,
  `sub_parameter_id` int(11) DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_id` bigint(20) UNSIGNED NOT NULL,
  `audited_by_id` bigint(20) UNSIGNED NOT NULL,
  `is_critical` tinyint(4) NOT NULL DEFAULT 0,
  `overall_score` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `yard_id` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `collection_manager_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_manager_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yard_manager_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_repo_id` tinyint(4) DEFAULT NULL,
  `agency_repo_id` tinyint(4) DEFAULT NULL,
  `collection_manager_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_alert_boxes`
--

CREATE TABLE `audit_alert_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_parameter_results`
--

CREATE TABLE `audit_parameter_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `audit_id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_id` bigint(20) UNSIGNED NOT NULL,
  `parameter_id` bigint(20) UNSIGNED NOT NULL,
  `orignal_weight` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `temp_weight` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `with_fatal_score` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `without_fatal_score` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `with_fatal_score_per` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `without_fatal_score_pre` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `is_critical` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_results`
--

CREATE TABLE `audit_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `audit_id` bigint(20) UNSIGNED NOT NULL,
  `parameter_id` bigint(20) UNSIGNED NOT NULL,
  `sub_parameter_id` bigint(20) UNSIGNED NOT NULL,
  `is_critical` tinyint(4) NOT NULL DEFAULT 0,
  `is_non_scoring` tinyint(4) NOT NULL DEFAULT 0,
  `selected_option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `failure_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_percentage` tinyint(4) NOT NULL DEFAULT 0,
  `selected_per` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beat_plans`
--

CREATE TABLE `beat_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beat_plan_sub_parts`
--

CREATE TABLE `beat_plan_sub_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branchables`
--

CREATE TABLE `branchables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `manager_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bucket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch_repos`
--

CREATE TABLE `branch_repos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branch_repo_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch_repo_users`
--

CREATE TABLE `branch_repo_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Adilabad', 2, NULL, NULL),
(2, 'Anantapur', 2, NULL, NULL),
(3, 'Chittoor', 2, NULL, NULL),
(4, 'Kakinada', 2, NULL, NULL),
(5, 'Guntur', 2, NULL, NULL),
(6, 'Hyderabad', 2, NULL, NULL),
(7, 'Karimnagar', 2, NULL, NULL),
(8, 'Khammam', 2, NULL, NULL),
(9, 'Krishna', 2, NULL, NULL),
(10, 'Kurnool', 2, NULL, NULL),
(11, 'Mahbubnagar', 2, NULL, NULL),
(12, 'Medak', 2, NULL, NULL),
(13, 'Nalgonda', 2, NULL, NULL),
(14, 'Nizamabad', 2, NULL, NULL),
(15, 'Ongole', 2, NULL, NULL),
(16, 'Hyderabad', 2, NULL, NULL),
(17, 'Srikakulam', 2, NULL, NULL),
(18, 'Nellore', 2, NULL, NULL),
(19, 'Visakhapatnam', 2, NULL, NULL),
(20, 'Vizianagaram', 2, NULL, NULL),
(21, 'Warangal', 2, NULL, NULL),
(22, 'Eluru', 2, NULL, NULL),
(23, 'Kadapa', 2, NULL, NULL),
(24, 'Anjaw', 3, NULL, NULL),
(25, 'Changlang', 3, NULL, NULL),
(26, 'East Siang', 3, NULL, NULL),
(27, 'Kurung Kumey', 3, NULL, NULL),
(28, 'Lohit', 3, NULL, NULL),
(29, 'Lower Dibang Valley', 3, NULL, NULL),
(30, 'Lower Subansiri', 3, NULL, NULL),
(31, 'Papum Pare', 3, NULL, NULL),
(32, 'Tawang', 3, NULL, NULL),
(33, 'Tirap', 3, NULL, NULL),
(34, 'Dibang Valley', 3, NULL, NULL),
(35, 'Upper Siang', 3, NULL, NULL),
(36, 'Upper Subansiri', 3, NULL, NULL),
(37, 'West Kameng', 3, NULL, NULL),
(38, 'West Siang', 3, NULL, NULL),
(39, 'Baksa', 4, NULL, NULL),
(40, 'Barpeta', 4, NULL, NULL),
(41, 'Bongaigaon', 4, NULL, NULL),
(42, 'Cachar', 4, NULL, NULL),
(43, 'Chirang', 4, NULL, NULL),
(44, 'Darrang', 4, NULL, NULL),
(45, 'Dhemaji', 4, NULL, NULL),
(46, 'Dima Hasao', 4, NULL, NULL),
(47, 'Dhubri', 4, NULL, NULL),
(48, 'Dibrugarh', 4, NULL, NULL),
(49, 'Goalpara', 4, NULL, NULL),
(50, 'Golaghat', 4, NULL, NULL),
(51, 'Hailakandi', 4, NULL, NULL),
(52, 'Jorhat', 4, NULL, NULL),
(53, 'Kamrup', 4, NULL, NULL),
(54, 'Kamrup Metropolitan', 4, NULL, NULL),
(55, 'Karbi Anglong', 4, NULL, NULL),
(56, 'Karimganj', 4, NULL, NULL),
(57, 'Kokrajhar', 4, NULL, NULL),
(58, 'Lakhimpur', 4, NULL, NULL),
(59, 'Marigaon', 4, NULL, NULL),
(60, 'Nagaon', 4, NULL, NULL),
(61, 'Nalbari', 4, NULL, NULL),
(62, 'Sibsagar', 4, NULL, NULL),
(63, 'Sonitpur', 4, NULL, NULL),
(64, 'Tinsukia', 4, NULL, NULL),
(65, 'Udalguri', 4, NULL, NULL),
(66, 'Araria', 5, NULL, NULL),
(67, 'Arwal', 5, NULL, NULL),
(68, 'Aurangabad', 5, NULL, NULL),
(69, 'Banka', 5, NULL, NULL),
(70, 'Begusarai', 5, NULL, NULL),
(71, 'Bhagalpur', 5, NULL, NULL),
(72, 'Bhojpur', 5, NULL, NULL),
(73, 'Buxar', 5, NULL, NULL),
(74, 'Darbhanga', 5, NULL, NULL),
(75, 'East Champaran', 5, NULL, NULL),
(76, 'Gaya', 5, NULL, NULL),
(77, 'Gopalganj', 5, NULL, NULL),
(78, 'Jamui', 5, NULL, NULL),
(79, 'Jehanabad', 5, NULL, NULL),
(80, 'Kaimur', 5, NULL, NULL),
(81, 'Katihar', 5, NULL, NULL),
(82, 'Khagaria', 5, NULL, NULL),
(83, 'Kishanganj', 5, NULL, NULL),
(84, 'Lakhisarai', 5, NULL, NULL),
(85, 'Madhepura', 5, NULL, NULL),
(86, 'Madhubani', 5, NULL, NULL),
(87, 'Munger', 5, NULL, NULL),
(88, 'Muzaffarpur', 5, NULL, NULL),
(89, 'Nalanda', 5, NULL, NULL),
(90, 'Nawada', 5, NULL, NULL),
(91, 'Patna', 5, NULL, NULL),
(92, 'Purnia', 5, NULL, NULL),
(93, 'Rohtas', 5, NULL, NULL),
(94, 'Saharsa', 5, NULL, NULL),
(95, 'Samastipur', 5, NULL, NULL),
(96, 'Saran', 5, NULL, NULL),
(97, 'Sheikhpura', 5, NULL, NULL),
(98, 'Sheohar', 5, NULL, NULL),
(99, 'Sitamarhi', 5, NULL, NULL),
(100, 'Siwan', 5, NULL, NULL),
(101, 'Supaul', 5, NULL, NULL),
(102, 'Vaishali', 5, NULL, NULL),
(103, 'West Champaran', 5, NULL, NULL),
(104, 'Chandigarh', 5, NULL, NULL),
(105, 'Bastar', 7, NULL, NULL),
(106, 'Bijapur', 7, NULL, NULL),
(107, 'Bilaspur', 7, NULL, NULL),
(108, 'Dantewada', 7, NULL, NULL),
(109, 'Dhamtari', 7, NULL, NULL),
(110, 'Durg', 7, NULL, NULL),
(111, 'Jashpur', 7, NULL, NULL),
(112, 'Janjgir-Champa', 7, NULL, NULL),
(113, 'Korba', 7, NULL, NULL),
(114, 'Koriya', 7, NULL, NULL),
(115, 'Kanker', 7, NULL, NULL),
(116, 'Kabirdham (Kawardha)', 7, NULL, NULL),
(117, 'Mahasamund', 7, NULL, NULL),
(118, 'Narayanpur', 7, NULL, NULL),
(119, 'Raigarh', 7, NULL, NULL),
(120, 'Rajnandgaon', 7, NULL, NULL),
(121, 'Raipur', 7, NULL, NULL),
(122, 'Surguja', 7, NULL, NULL),
(123, 'Central Delhi', 10, NULL, NULL),
(124, 'East Delhi', 10, NULL, NULL),
(125, 'New Delhi', 10, NULL, NULL),
(126, 'North Delhi', 10, NULL, NULL),
(127, 'North East Delhi', 10, NULL, NULL),
(128, 'North West Delhi', 10, NULL, NULL),
(129, 'South Delhi', 10, NULL, NULL),
(130, 'South West Delhi', 10, NULL, NULL),
(131, 'West Delhi', 10, NULL, NULL),
(132, 'North Goa', 11, NULL, NULL),
(133, 'South Goa', 11, NULL, NULL),
(134, 'Ahmedabad', 12, NULL, NULL),
(135, 'Amreli district', 12, NULL, NULL),
(136, 'Anand', 12, NULL, NULL),
(137, 'Banaskantha', 12, NULL, NULL),
(138, 'Bharuch', 12, NULL, NULL),
(139, 'Bhavnagar', 12, NULL, NULL),
(140, 'Dahod', 12, NULL, NULL),
(141, 'The Dangs', 12, NULL, NULL),
(142, 'Gandhinagar', 12, NULL, NULL),
(143, 'Jamnagar', 12, NULL, NULL),
(144, 'Junagadh', 12, NULL, NULL),
(145, 'Kutch', 12, NULL, NULL),
(146, 'Kheda', 12, NULL, NULL),
(147, 'Mehsana', 12, NULL, NULL),
(148, 'Narmada', 12, NULL, NULL),
(149, 'Navsari', 12, NULL, NULL),
(150, 'Patan', 12, NULL, NULL),
(151, 'Panchmahal', 12, NULL, NULL),
(152, 'Porbandar', 12, NULL, NULL),
(153, 'Rajkot', 12, NULL, NULL),
(154, 'Sabarkantha', 12, NULL, NULL),
(155, 'Surendranagar', 12, NULL, NULL),
(156, 'Surat', 12, NULL, NULL),
(157, 'Vyara', 12, NULL, NULL),
(158, 'Vadodara', 12, NULL, NULL),
(159, 'Valsad', 12, NULL, NULL),
(160, 'Ambala', 13, NULL, NULL),
(161, 'Bhiwani', 13, NULL, NULL),
(162, 'Faridabad', 13, NULL, NULL),
(163, 'Fatehabad', 13, NULL, NULL),
(164, 'Gurgaon', 13, NULL, NULL),
(165, 'Hissar', 13, NULL, NULL),
(166, 'Jhajjar', 13, NULL, NULL),
(167, 'Jind', 13, NULL, NULL),
(168, 'Karnal', 13, NULL, NULL),
(169, 'Kaithal', 13, NULL, NULL),
(170, 'Kurukshetra', 13, NULL, NULL),
(171, 'Mahendragarh', 13, NULL, NULL),
(172, 'Mewat', 13, NULL, NULL),
(173, 'Palwal', 13, NULL, NULL),
(174, 'Panchkula', 13, NULL, NULL),
(175, 'Panipat', 13, NULL, NULL),
(176, 'Rewari', 13, NULL, NULL),
(177, 'Rohtak', 13, NULL, NULL),
(178, 'Sirsa', 13, NULL, NULL),
(179, 'Sonipat', 13, NULL, NULL),
(180, 'Yamuna Nagar', 13, NULL, NULL),
(181, 'Bilaspur', 14, NULL, NULL),
(182, 'Chamba', 14, NULL, NULL),
(183, 'Hamirpur', 14, NULL, NULL),
(184, 'Kangra', 14, NULL, NULL),
(185, 'Kinnaur', 14, NULL, NULL),
(186, 'Kullu', 14, NULL, NULL),
(187, 'Lahaul and Spiti', 14, NULL, NULL),
(188, 'Mandi', 14, NULL, NULL),
(189, 'Shimla', 14, NULL, NULL),
(190, 'Sirmaur', 14, NULL, NULL),
(191, 'Solan', 14, NULL, NULL),
(192, 'Una', 14, NULL, NULL),
(193, 'Anantnag', 15, NULL, NULL),
(194, 'Badgam', 15, NULL, NULL),
(195, 'Bandipora', 15, NULL, NULL),
(196, 'Baramulla', 15, NULL, NULL),
(197, 'Doda', 15, NULL, NULL),
(198, 'Ganderbal', 15, NULL, NULL),
(199, 'Jammu', 15, NULL, NULL),
(200, 'Kargil', 15, NULL, NULL),
(201, 'Kathua', 15, NULL, NULL),
(202, 'Kishtwar', 15, NULL, NULL),
(203, 'Kupwara', 15, NULL, NULL),
(204, 'Kulgam', 15, NULL, NULL),
(205, 'Leh', 15, NULL, NULL),
(206, 'Poonch', 15, NULL, NULL),
(207, 'Pulwama', 15, NULL, NULL),
(208, 'Rajauri', 15, NULL, NULL),
(209, 'Ramban', 15, NULL, NULL),
(210, 'Reasi', 15, NULL, NULL),
(211, 'Samba', 15, NULL, NULL),
(212, 'Shopian', 15, NULL, NULL),
(213, 'Srinagar', 15, NULL, NULL),
(214, 'Udhampur', 15, NULL, NULL),
(215, 'Bokaro', 16, NULL, NULL),
(216, 'Chatra', 16, NULL, NULL),
(217, 'Deoghar', 16, NULL, NULL),
(218, 'Dhanbad', 16, NULL, NULL),
(219, 'Dumka', 16, NULL, NULL),
(220, 'East Singhbhum', 16, NULL, NULL),
(221, 'Garhwa', 16, NULL, NULL),
(222, 'Giridih', 16, NULL, NULL),
(223, 'Godda', 16, NULL, NULL),
(224, 'Gumla', 16, NULL, NULL),
(225, 'Hazaribag', 16, NULL, NULL),
(226, 'Jamtara', 16, NULL, NULL),
(227, 'Khunti', 16, NULL, NULL),
(228, 'Koderma', 16, NULL, NULL),
(229, 'Latehar', 16, NULL, NULL),
(230, 'Lohardaga', 16, NULL, NULL),
(231, 'Pakur', 16, NULL, NULL),
(232, 'Palamu', 16, NULL, NULL),
(233, 'Ramgarh', 16, NULL, NULL),
(234, 'Ranchi', 16, NULL, NULL),
(235, 'Sahibganj', 16, NULL, NULL),
(236, 'Seraikela Kharsawan', 16, NULL, NULL),
(237, 'Simdega', 16, NULL, NULL),
(238, 'West Singhbhum', 16, NULL, NULL),
(239, 'Bagalkot', 17, NULL, NULL),
(240, 'Bangalore Rural', 17, NULL, NULL),
(241, 'Bangalore Urban', 17, NULL, NULL),
(242, 'Belgaum', 17, NULL, NULL),
(243, 'Bellary', 17, NULL, NULL),
(244, 'Bidar', 17, NULL, NULL),
(245, 'Bijapur', 17, NULL, NULL),
(246, 'Chamarajnagar', 17, NULL, NULL),
(247, 'Chikkamagaluru', 17, NULL, NULL),
(248, 'Chikkaballapur', 17, NULL, NULL),
(249, 'Chitradurga', 17, NULL, NULL),
(250, 'Davanagere', 17, NULL, NULL),
(251, 'Dharwad', 17, NULL, NULL),
(252, 'Dakshina Kannada', 17, NULL, NULL),
(253, 'Gadag', 17, NULL, NULL),
(254, 'Gulbarga', 17, NULL, NULL),
(255, 'Hassan', 17, NULL, NULL),
(256, 'Haveri district', 17, NULL, NULL),
(257, 'Kodagu', 17, NULL, NULL),
(258, 'Kolar', 17, NULL, NULL),
(259, 'Koppal', 17, NULL, NULL),
(260, 'Mandya', 17, NULL, NULL),
(261, 'Mysore', 17, NULL, NULL),
(262, 'Raichur', 17, NULL, NULL),
(263, 'Shimoga', 17, NULL, NULL),
(264, 'Tumkur', 17, NULL, NULL),
(265, 'Udupi', 17, NULL, NULL),
(266, 'Uttara Kannada', 17, NULL, NULL),
(267, 'Ramanagara', 17, NULL, NULL),
(268, 'Yadgir', 17, NULL, NULL),
(269, 'Alappuzha', 18, NULL, NULL),
(270, 'Ernakulam', 18, NULL, NULL),
(271, 'Idukki', 18, NULL, NULL),
(272, 'Kannur', 18, NULL, NULL),
(273, 'Kasaragod', 18, NULL, NULL),
(274, 'Kollam', 18, NULL, NULL),
(275, 'Kottayam', 18, NULL, NULL),
(276, 'Kozhikode', 18, NULL, NULL),
(277, 'Malappuram', 18, NULL, NULL),
(278, 'Palakkad', 18, NULL, NULL),
(279, 'Pathanamthitta', 18, NULL, NULL),
(280, 'Thrissur', 18, NULL, NULL),
(281, 'Thiruvananthapuram', 18, NULL, NULL),
(282, 'Wayanad', 18, NULL, NULL),
(283, 'Alirajpur', 20, NULL, NULL),
(284, 'Anuppur', 20, NULL, NULL),
(285, 'Ashok Nagar', 20, NULL, NULL),
(286, 'Balaghat', 20, NULL, NULL),
(287, 'Barwani', 20, NULL, NULL),
(288, 'Betul', 20, NULL, NULL),
(289, 'Bhind', 20, NULL, NULL),
(290, 'Bhopal', 20, NULL, NULL),
(291, 'Burhanpur', 20, NULL, NULL),
(292, 'Chhatarpur', 20, NULL, NULL),
(293, 'Chhindwara', 20, NULL, NULL),
(294, 'Damoh', 20, NULL, NULL),
(295, 'Datia', 20, NULL, NULL),
(296, 'Dewas', 20, NULL, NULL),
(297, 'Dhar', 20, NULL, NULL),
(298, 'Dindori', 20, NULL, NULL),
(299, 'Guna', 20, NULL, NULL),
(300, 'Gwalior', 20, NULL, NULL),
(301, 'Harda', 20, NULL, NULL),
(302, 'Hoshangabad', 20, NULL, NULL),
(303, 'Indore', 20, NULL, NULL),
(304, 'Jabalpur', 20, NULL, NULL),
(305, 'Jhabua', 20, NULL, NULL),
(306, 'Katni', 20, NULL, NULL),
(307, 'Khandwa (East Nimar)', 20, NULL, NULL),
(308, 'Khargone (West Nimar)', 20, NULL, NULL),
(309, 'Mandla', 20, NULL, NULL),
(310, 'Mandsaur', 20, NULL, NULL),
(311, 'Morena', 20, NULL, NULL),
(312, 'Narsinghpur', 20, NULL, NULL),
(313, 'Neemuch', 20, NULL, NULL),
(314, 'Panna', 20, NULL, NULL),
(315, 'Rewa', 20, NULL, NULL),
(316, 'Rajgarh', 20, NULL, NULL),
(317, 'Ratlam', 20, NULL, NULL),
(318, 'Raisen', 20, NULL, NULL),
(319, 'Sagar', 20, NULL, NULL),
(320, 'Satna', 20, NULL, NULL),
(321, 'Sehore', 20, NULL, NULL),
(322, 'Seoni', 20, NULL, NULL),
(323, 'Shahdol', 20, NULL, NULL),
(324, 'Shajapur', 20, NULL, NULL),
(325, 'Sheopur', 20, NULL, NULL),
(326, 'Shivpuri', 20, NULL, NULL),
(327, 'Sidhi', 20, NULL, NULL),
(328, 'Singrauli', 20, NULL, NULL),
(329, 'Tikamgarh', 20, NULL, NULL),
(330, 'Ujjain', 20, NULL, NULL),
(331, 'Umaria', 20, NULL, NULL),
(332, 'Vidisha', 20, NULL, NULL),
(333, 'Ahmednagar', 21, NULL, NULL),
(334, 'Akola', 21, NULL, NULL),
(335, 'Amravati', 21, NULL, NULL),
(336, 'Aurangabad', 21, NULL, NULL),
(337, 'Bhandara', 21, NULL, NULL),
(338, 'Beed', 21, NULL, NULL),
(339, 'Buldhana', 21, NULL, NULL),
(340, 'Chandrapur', 21, NULL, NULL),
(341, 'Dhule', 21, NULL, NULL),
(342, 'Gadchiroli', 21, NULL, NULL),
(343, 'Gondia', 21, NULL, NULL),
(344, 'Hingoli', 21, NULL, NULL),
(345, 'Jalgaon', 21, NULL, NULL),
(346, 'Jalna', 21, NULL, NULL),
(347, 'Kolhapur', 21, NULL, NULL),
(348, 'Latur', 21, NULL, NULL),
(349, 'Mumbai City', 21, NULL, NULL),
(350, 'Mumbai suburban', 21, NULL, NULL),
(351, 'Nandurbar', 21, NULL, NULL),
(352, 'Nanded', 21, NULL, NULL),
(353, 'Nagpur', 21, NULL, NULL),
(354, 'Nashik', 21, NULL, NULL),
(355, 'Osmanabad', 21, NULL, NULL),
(356, 'Parbhani', 21, NULL, NULL),
(357, 'Pune', 21, NULL, NULL),
(358, 'Raigad', 21, NULL, NULL),
(359, 'Ratnagiri', 21, NULL, NULL),
(360, 'Sindhudurg', 21, NULL, NULL),
(361, 'Sangli', 21, NULL, NULL),
(362, 'Solapur', 21, NULL, NULL),
(363, 'Satara', 21, NULL, NULL),
(364, 'Thane', 21, NULL, NULL),
(365, 'Wardha', 21, NULL, NULL),
(366, 'Washim', 21, NULL, NULL),
(367, 'Yavatmal', 21, NULL, NULL),
(368, 'Amritsar', 28, NULL, NULL),
(369, 'Barnala', 28, NULL, NULL),
(370, 'Bathinda', 28, NULL, NULL),
(371, 'Firozpur', 28, NULL, NULL),
(372, 'Faridkot', 28, NULL, NULL),
(373, 'Fatehgarh Sahib', 28, NULL, NULL),
(374, 'Fazilka', 28, NULL, NULL),
(375, 'Gurdaspur', 28, NULL, NULL),
(376, 'Hoshiarpur', 28, NULL, NULL),
(377, 'Jalandhar', 28, NULL, NULL),
(378, 'Kapurthala', 28, NULL, NULL),
(379, 'Ludhiana', 28, NULL, NULL),
(380, 'Mansa', 28, NULL, NULL),
(381, 'Moga', 28, NULL, NULL),
(382, 'Sri Muktsar Sahib', 28, NULL, NULL),
(383, 'Pathankot', 28, NULL, NULL),
(384, 'Patiala', 28, NULL, NULL),
(385, 'Rupnagar', 28, NULL, NULL),
(386, 'Ajitgarh (Mohali)', 28, NULL, NULL),
(387, 'Sangrur', 28, NULL, NULL),
(388, 'Nawanshahr', 28, NULL, NULL),
(389, 'Tarn Taran', 28, NULL, NULL),
(390, 'Ajmer', 29, NULL, NULL),
(391, 'Alwar', 29, NULL, NULL),
(392, 'Bikaner', 29, NULL, NULL),
(393, 'Barmer', 29, NULL, NULL),
(394, 'Banswara', 29, NULL, NULL),
(395, 'Bharatpur', 29, NULL, NULL),
(396, 'Baran', 29, NULL, NULL),
(397, 'Bundi', 29, NULL, NULL),
(398, 'Bhilwara', 29, NULL, NULL),
(399, 'Churu', 29, NULL, NULL),
(400, 'Chittorgarh', 29, NULL, NULL),
(401, 'Dausa', 29, NULL, NULL),
(402, 'Dholpur', 29, NULL, NULL),
(403, 'Dungapur', 29, NULL, NULL),
(404, 'Ganganagar', 29, NULL, NULL),
(405, 'Hanumangarh', 29, NULL, NULL),
(406, 'Jhunjhunu', 29, NULL, NULL),
(407, 'Jalore', 29, NULL, NULL),
(408, 'Jodhpur', 29, NULL, NULL),
(409, 'Jaipur', 29, NULL, NULL),
(410, 'Jaisalmer', 29, NULL, NULL),
(411, 'Jhalawar', 29, NULL, NULL),
(412, 'Karauli', 29, NULL, NULL),
(413, 'Kota', 29, NULL, NULL),
(414, 'Nagaur', 29, NULL, NULL),
(415, 'Pali', 29, NULL, NULL),
(416, 'Pratapgarh', 29, NULL, NULL),
(417, 'Rajsamand', 29, NULL, NULL),
(418, 'Sikar', 29, NULL, NULL),
(419, 'Sawai Madhopur', 29, NULL, NULL),
(420, 'Sirohi', 29, NULL, NULL),
(421, 'Tonk', 29, NULL, NULL),
(422, 'Udaipur', 29, NULL, NULL),
(423, 'East Sikkim', 30, NULL, NULL),
(424, 'North Sikkim', 30, NULL, NULL),
(425, 'South Sikkim', 30, NULL, NULL),
(426, 'West Sikkim', 30, NULL, NULL),
(427, 'Ariyalur', 31, NULL, NULL),
(428, 'Chennai', 31, NULL, NULL),
(429, 'Coimbatore', 31, NULL, NULL),
(430, 'Cuddalore', 31, NULL, NULL),
(431, 'Dharmapuri', 31, NULL, NULL),
(432, 'Dindigul', 31, NULL, NULL),
(433, 'Erode', 31, NULL, NULL),
(434, 'Kanchipuram', 31, NULL, NULL),
(435, 'Kanyakumari', 31, NULL, NULL),
(436, 'Karur', 31, NULL, NULL),
(437, 'Madurai', 31, NULL, NULL),
(438, 'Nagapattinam', 31, NULL, NULL),
(439, 'Nilgiris', 31, NULL, NULL),
(440, 'Namakkal', 31, NULL, NULL),
(441, 'Perambalur', 31, NULL, NULL),
(442, 'Pudukkottai', 31, NULL, NULL),
(443, 'Ramanathapuram', 31, NULL, NULL),
(444, 'Salem', 31, NULL, NULL),
(445, 'Sivaganga', 31, NULL, NULL),
(446, 'Tirupur', 31, NULL, NULL),
(447, 'Tiruchirappalli', 31, NULL, NULL),
(448, 'Theni', 31, NULL, NULL),
(449, 'Tirunelveli', 31, NULL, NULL),
(450, 'Thanjavur', 31, NULL, NULL),
(451, 'Thoothukudi', 31, NULL, NULL),
(452, 'Tiruvallur', 31, NULL, NULL),
(453, 'Tiruvarur', 31, NULL, NULL),
(454, 'Tiruvannamalai', 31, NULL, NULL),
(455, 'Vellore', 31, NULL, NULL),
(456, 'Viluppuram', 31, NULL, NULL),
(457, 'Virudhunagar', 31, NULL, NULL),
(458, 'Agra', 34, NULL, NULL),
(459, 'Allahabad', 34, NULL, NULL),
(460, 'Aligarh', 34, NULL, NULL),
(461, 'Ambedkar Nagar', 34, NULL, NULL),
(462, 'Auraiya', 34, NULL, NULL),
(463, 'Azamgarh', 34, NULL, NULL),
(464, 'Barabanki', 34, NULL, NULL),
(465, 'Budaun', 34, NULL, NULL),
(466, 'Bagpat', 34, NULL, NULL),
(467, 'Bahraich', 34, NULL, NULL),
(468, 'Bijnor', 34, NULL, NULL),
(469, 'Ballia', 34, NULL, NULL),
(470, 'Banda', 34, NULL, NULL),
(471, 'Balrampur', 34, NULL, NULL),
(472, 'Bareilly', 34, NULL, NULL),
(473, 'Basti', 34, NULL, NULL),
(474, 'Bulandshahr', 34, NULL, NULL),
(475, 'Chandauli', 34, NULL, NULL),
(476, 'Chhatrapati Shahuji Maharaj Nagar', 34, NULL, NULL),
(477, 'Chitrakoot', 34, NULL, NULL),
(478, 'Deoria', 34, NULL, NULL),
(479, 'Etah', 34, NULL, NULL),
(480, 'Kanshi Ram Nagar', 34, NULL, NULL),
(481, 'Etawah', 34, NULL, NULL),
(482, 'Firozabad', 34, NULL, NULL),
(483, 'Farrukhabad', 34, NULL, NULL),
(484, 'Fatehpur', 34, NULL, NULL),
(485, 'Faizabad', 34, NULL, NULL),
(486, 'Gautam Buddh Nagar', 34, NULL, NULL),
(487, 'Gonda', 34, NULL, NULL),
(488, 'Ghazipur', 34, NULL, NULL),
(489, 'Gorakhpur', 34, NULL, NULL),
(490, 'Ghaziabad', 34, NULL, NULL),
(491, 'Hamirpur', 34, NULL, NULL),
(492, 'Hardoi', 34, NULL, NULL),
(493, 'Mahamaya Nagar', 34, NULL, NULL),
(494, 'Jhansi', 34, NULL, NULL),
(495, 'Jalaun', 34, NULL, NULL),
(496, 'Jyotiba Phule Nagar', 34, NULL, NULL),
(497, 'Jaunpur district', 34, NULL, NULL),
(498, 'Ramabai Nagar (Kanpur Dehat)', 34, NULL, NULL),
(499, 'Kannauj', 34, NULL, NULL),
(500, 'Kanpur', 34, NULL, NULL),
(501, 'Kaushambi', 34, NULL, NULL),
(502, 'Kushinagar', 34, NULL, NULL),
(503, 'Lalitpur', 34, NULL, NULL),
(504, 'Lakhimpur Kheri', 34, NULL, NULL),
(505, 'Lucknow', 34, NULL, NULL),
(506, 'Mau', 34, NULL, NULL),
(507, 'Meerut', 34, NULL, NULL),
(508, 'Maharajganj', 34, NULL, NULL),
(509, 'Mahoba', 34, NULL, NULL),
(510, 'Mirzapur', 34, NULL, NULL),
(511, 'Moradabad', 34, NULL, NULL),
(512, 'Mainpuri', 34, NULL, NULL),
(513, 'Mathura', 34, NULL, NULL),
(514, 'Muzaffarnagar', 34, NULL, NULL),
(515, 'Panchsheel Nagar district (Hapur)', 34, NULL, NULL),
(516, 'Pilibhit', 34, NULL, NULL),
(517, 'Shamli', 34, NULL, NULL),
(518, 'Pratapgarh', 34, NULL, NULL),
(519, 'Rampur', 34, NULL, NULL),
(520, 'Raebareli', 34, NULL, NULL),
(521, 'Saharanpur', 34, NULL, NULL),
(522, 'Sitapur', 34, NULL, NULL),
(523, 'Shahjahanpur', 34, NULL, NULL),
(524, 'Sant Kabir Nagar', 34, NULL, NULL),
(525, 'Siddharthnagar', 34, NULL, NULL),
(526, 'Sonbhadra', 34, NULL, NULL),
(527, 'Sant Ravidas Nagar', 34, NULL, NULL),
(528, 'Sultanpur', 34, NULL, NULL),
(529, 'Shravasti', 34, NULL, NULL),
(530, 'Unnao', 34, NULL, NULL),
(531, 'Varanasi', 34, NULL, NULL),
(532, 'Almora', 35, NULL, NULL),
(533, 'Bageshwar', 35, NULL, NULL),
(534, 'Chamoli', 35, NULL, NULL),
(535, 'Champawat', 35, NULL, NULL),
(536, 'Dehradun', 35, NULL, NULL),
(537, 'Haridwar', 35, NULL, NULL),
(538, 'Nainital', 35, NULL, NULL),
(539, 'Pauri Garhwal', 35, NULL, NULL),
(540, 'Pithoragarh', 35, NULL, NULL),
(541, 'Rudraprayag', 35, NULL, NULL),
(542, 'Tehri Garhwal', 35, NULL, NULL),
(543, 'Udham Singh Nagar', 35, NULL, NULL),
(544, 'Uttarkashi', 35, NULL, NULL),
(545, 'Birbhum', 36, NULL, NULL),
(546, 'Bankura', 36, NULL, NULL),
(547, 'Bardhaman', 36, NULL, NULL),
(548, 'Darjeeling', 36, NULL, NULL),
(549, 'Dakshin Dinajpur', 36, NULL, NULL),
(550, 'Hooghly', 36, NULL, NULL),
(551, 'Howrah', 36, NULL, NULL),
(552, 'Jalpaiguri', 36, NULL, NULL),
(553, 'Cooch Behar', 36, NULL, NULL),
(554, 'Kolkata', 36, NULL, NULL),
(555, 'Maldah', 36, NULL, NULL),
(556, 'Paschim Medinipur', 36, NULL, NULL),
(557, 'Purba Medinipur', 36, NULL, NULL),
(558, 'Murshidabad', 36, NULL, NULL),
(559, 'Nadia', 36, NULL, NULL),
(560, 'North 24 Parganas', 36, NULL, NULL),
(561, 'South 24 Parganas', 36, NULL, NULL),
(562, 'Purulia', 36, NULL, NULL),
(563, 'Uttar Dinajpur', 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collector_allocations`
--

CREATE TABLE `collector_allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agrmnt_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npa_stage_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bom_bucket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bom_bucket_q` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_flag_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bom_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailing_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_stamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_allocation_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_allocation_date_stamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dacs`
--

CREATE TABLE `dacs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `si` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PaymentId` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BranchId` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BranchName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgencyId` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgencyName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgentEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgentName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agent_Id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReceiptBookNo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReceiptNo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhysicalReceiptNo_online_transaction_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReceiptDate` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Month` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReferenceNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CUSTOMERNAME` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURRENT_BUCKET` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PaymentTowards` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMIAMT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LatePaymentPenalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BounceChargesAmt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Excess` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IMD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProcFee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Swap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EBCCharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CollectionPickupCharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ForeclosureAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TotalReceiptAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PaymentMode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstrumentDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstrumentNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstrumentAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MICRCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PANCardNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BatchID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BatchIDCreatedDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepositDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ENCollect_Pay_in_slip_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMS_Pay_In_Slip_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepositAccountNumber` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rectified_Depslip_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepositAmount` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PaymentStatus` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepositSlipNo_Status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Finnone_Update` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vintage` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MerchantReferenceNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BankTransactionId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BankTId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Amount` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StatusCode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RRN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AuthCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CardNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CardType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CardHolderName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProductGroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MerchantId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MerchantTransactionId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BBPayPartnerAgentCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BBPayPartnerAgentEmailId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BBPayPartnerAgentMobileNumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BBPayPartnerBranchCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BBPayBatchAckDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepositeBankName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `religon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(3, '2019_10_16_165121_create_regions_table', 2),
(4, '2019_10_16_165143_create_states_table', 2),
(5, '2019_10_16_175148_create_cities_table', 2),
(6, '2019_10_16_181121_create_permission_tables', 2),
(7, '2019_10_20_123749_create_table_yards', 3),
(8, '2019_10_20_130939_create_agencies_table', 3),
(9, '2019_10_21_180042_create_branches_table', 4),
(10, '2019_11_25_174212_create_products_table', 5),
(11, '2019_12_03_163328_create_branchables_table', 6),
(12, '2019_12_05_142935_create_product_users_table', 7),
(27, '2019_12_10_100340_create_dacs_table', 11),
(28, '2019_12_10_100434_create_collector_allocations_table', 11),
(29, '2019_12_10_100542_create_trail_intensity_table', 11),
(31, '2019_08_14_014523_create_qm_sheets_table', 12),
(32, '2019_12_10_100506_create_settlement_table', 13),
(34, '2019_12_10_100619_create_adverse_bukets_table', 14),
(35, '2019_08_11_133308_create_audit_alert_boxes_table', 15),
(36, '2019_08_17_052059_create_qm_sheet_parameters_table', 16),
(42, '2019_08_17_052455_create_qm_sheet_sub_parameters_table', 0),
(43, '2019_08_17_052455_create_qm_sheet_sub_parameters_table', 1),
(45, '2020_01_10_165228_create_beat_plans_table', 17),
(46, '2019_08_19_113242_create_audits_table', 18),
(47, '2019_08_19_115958_create_audit_results_table', 18),
(48, '2019_08_20_172112_create_audit_parameter_results_table', 18),
(49, '2020_01_10_203118_create_beat_plan_sub_parts_table', 19),
(50, '2020_01_14_080447_create_allocations_table', 19),
(51, '2020_02_17_072427_add_field_in_qm_sheet', 20),
(52, '2020_02_14_065239_add_field_in_users', 21),
(53, '2020_02_15_060148_create_red_alerts_table', 21),
(54, '2020_02_15_132708_add_field_in_audits_table', 21),
(55, '2020_02_18_062059_create_artifacts_table', 22),
(56, '2020_02_24_111627_create_qcs_table', 23),
(57, '2020_02_29_111312_add_fields_in_uploads_tabled', 24),
(58, '2020_03_02_090301_add_field_in_products', 24),
(59, '2020_03_02_114914_create_holidays_table', 24),
(60, '2020_03_04_071401_add_field_in_branchs_table', 25),
(61, '2020_03_04_071523_add_field_in_branchables_table', 25),
(62, '2020_03_04_071611_add_field_in_agencies_table', 25),
(63, '2020_03_04_071624_add_field_in_yards_table', 25),
(64, '2020_03_05_095507_create_branch_repos_table', 25),
(65, '2020_03_05_095547_create_agency_repos_table', 25),
(66, '2020_03_05_095622_create_yard_repos_table', 25),
(67, '2020_03_05_133723_create_branch_repo_users_table', 25),
(68, '2020_03_05_133837_create_agency_repo_users_table', 25),
(69, '2020_03_05_133902_create_yard_repo_users_table', 25),
(70, '2020_03_13_103611_add_fields_in_audits', 26),
(71, '2020_03_13_132440_add_fields_in_red_alerts', 26),
(72, '2020_03_14_131400_create_action_plans_table', 26),
(73, '2020_03_14_132624_create_action_plan_subs_table', 26),
(74, '2020_03_14_135105_create_action_plan__answerss_table', 26),
(75, '2020_03_16_104630_add_field_in_action_plans', 27),
(76, '2020_05_18_124556_add_fields_in_qm_sheet_sub_parameters', 28),
(77, '2020_05_20_071643_add_field_in_audit_results_table', 29),
(78, '2020_05_20_144418_add_field_in_red_alerts', 29),
(79, '2020_05_20_160203_add_field_in_action_plan_answers', 29),
(80, '2020_05_21_063644_add_fields_in_audits_table', 30),
(81, '2020_05_22_125037_create_red_alert_answers_table', 31),
(82, '2020_05_23_092139_add_fields_in_branch_repos_table', 32),
(83, '2020_05_23_092329_add_fields_in_agency_repos_table', 32),
(84, '2020_05_28_065215_add_fields_in_branchables', 33),
(85, '2020_05_30_072939_add_fields_in_audits_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 11),
(2, 'App\\User', 33),
(2, 'App\\User', 131),
(2, 'App\\User', 132),
(2, 'App\\User', 133),
(2, 'App\\User', 134),
(2, 'App\\User', 135),
(2, 'App\\User', 186),
(2, 'App\\User', 187),
(2, 'App\\User', 188),
(2, 'App\\User', 189),
(2, 'App\\User', 190),
(2, 'App\\User', 191),
(2, 'App\\User', 192),
(2, 'App\\User', 193),
(2, 'App\\User', 194),
(2, 'App\\User', 195),
(2, 'App\\User', 196),
(3, 'App\\User', 2),
(3, 'App\\User', 9),
(3, 'App\\User', 12),
(3, 'App\\User', 14),
(3, 'App\\User', 20),
(3, 'App\\User', 26),
(3, 'App\\User', 34),
(3, 'App\\User', 36),
(3, 'App\\User', 37),
(3, 'App\\User', 38),
(3, 'App\\User', 39),
(3, 'App\\User', 40),
(3, 'App\\User', 41),
(3, 'App\\User', 42),
(3, 'App\\User', 43),
(3, 'App\\User', 44),
(3, 'App\\User', 45),
(3, 'App\\User', 46),
(3, 'App\\User', 47),
(3, 'App\\User', 48),
(3, 'App\\User', 49),
(3, 'App\\User', 50),
(3, 'App\\User', 51),
(3, 'App\\User', 52),
(3, 'App\\User', 53),
(3, 'App\\User', 54),
(3, 'App\\User', 55),
(3, 'App\\User', 56),
(3, 'App\\User', 57),
(3, 'App\\User', 58),
(3, 'App\\User', 59),
(3, 'App\\User', 60),
(3, 'App\\User', 61),
(3, 'App\\User', 62),
(3, 'App\\User', 63),
(3, 'App\\User', 64),
(3, 'App\\User', 65),
(3, 'App\\User', 66),
(3, 'App\\User', 67),
(3, 'App\\User', 68),
(3, 'App\\User', 69),
(3, 'App\\User', 70),
(3, 'App\\User', 71),
(3, 'App\\User', 72),
(3, 'App\\User', 73),
(3, 'App\\User', 74),
(3, 'App\\User', 75),
(3, 'App\\User', 76),
(3, 'App\\User', 77),
(3, 'App\\User', 78),
(3, 'App\\User', 79),
(3, 'App\\User', 80),
(3, 'App\\User', 81),
(3, 'App\\User', 82),
(3, 'App\\User', 83),
(3, 'App\\User', 84),
(3, 'App\\User', 85),
(3, 'App\\User', 86),
(3, 'App\\User', 87),
(3, 'App\\User', 88),
(3, 'App\\User', 89),
(3, 'App\\User', 90),
(3, 'App\\User', 91),
(3, 'App\\User', 92),
(3, 'App\\User', 93),
(3, 'App\\User', 94),
(3, 'App\\User', 95),
(3, 'App\\User', 96),
(3, 'App\\User', 110),
(3, 'App\\User', 116),
(3, 'App\\User', 122),
(3, 'App\\User', 123),
(3, 'App\\User', 127),
(3, 'App\\User', 130),
(3, 'App\\User', 160),
(3, 'App\\User', 164),
(3, 'App\\User', 168),
(3, 'App\\User', 169),
(3, 'App\\User', 172),
(3, 'App\\User', 174),
(3, 'App\\User', 178),
(3, 'App\\User', 181),
(4, 'App\\User', 3),
(4, 'App\\User', 13),
(4, 'App\\User', 15),
(4, 'App\\User', 21),
(4, 'App\\User', 27),
(4, 'App\\User', 35),
(4, 'App\\User', 102),
(4, 'App\\User', 103),
(4, 'App\\User', 111),
(4, 'App\\User', 117),
(4, 'App\\User', 118),
(4, 'App\\User', 165),
(4, 'App\\User', 170),
(4, 'App\\User', 175),
(4, 'App\\User', 183),
(5, 'App\\User', 4),
(5, 'App\\User', 16),
(5, 'App\\User', 22),
(5, 'App\\User', 28),
(5, 'App\\User', 112),
(5, 'App\\User', 118),
(5, 'App\\User', 124),
(5, 'App\\User', 128),
(5, 'App\\User', 161),
(5, 'App\\User', 166),
(5, 'App\\User', 173),
(5, 'App\\User', 176),
(5, 'App\\User', 179),
(5, 'App\\User', 182),
(5, 'App\\User', 185),
(6, 'App\\User', 5),
(6, 'App\\User', 17),
(6, 'App\\User', 23),
(6, 'App\\User', 29),
(6, 'App\\User', 113),
(6, 'App\\User', 118),
(6, 'App\\User', 119),
(6, 'App\\User', 162),
(6, 'App\\User', 167),
(6, 'App\\User', 171),
(6, 'App\\User', 177),
(6, 'App\\User', 180),
(6, 'App\\User', 184),
(7, 'App\\User', 6),
(7, 'App\\User', 18),
(7, 'App\\User', 24),
(7, 'App\\User', 30),
(7, 'App\\User', 114),
(7, 'App\\User', 118),
(7, 'App\\User', 120),
(7, 'App\\User', 125),
(7, 'App\\User', 163),
(8, 'App\\User', 7),
(8, 'App\\User', 19),
(8, 'App\\User', 25),
(8, 'App\\User', 31),
(8, 'App\\User', 115),
(8, 'App\\User', 121),
(8, 'App\\User', 126),
(8, 'App\\User', 129),
(9, 'App\\User', 8),
(10, 'App\\User', 10),
(10, 'App\\User', 12),
(10, 'App\\User', 32),
(10, 'App\\User', 133),
(10, 'App\\User', 136);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'delete', 'web', '2019-11-03 07:28:31', '2020-02-12 05:38:27'),
(2, 'Edit', 'web', '2019-11-03 08:19:01', '2020-02-12 05:37:05'),
(3, 'view', 'web', '2019-12-03 10:48:06', '2020-02-12 05:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bucket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `created_at`, `updated_at`, `bucket`) VALUES
(1, 'Business Loan', 0, '2019-11-25 12:57:37', '2020-05-25 15:24:01', 'x and 6-7'),
(4, 'Micro Business Loan', 0, '2020-02-12 06:20:25', '2020-02-12 06:20:25', NULL),
(6, 'Consumer Loan', 0, '2020-02-12 06:21:17', '2020-05-25 15:24:01', 'X,6,7'),
(8, 'Cross Sell', 0, '2020-02-12 06:21:54', '2020-05-25 15:24:05', '0-7'),
(10, 'Personal Loan', 0, '2020-02-12 06:22:35', '2020-05-25 15:24:00', '3'),
(12, 'Mort_HFC', 0, '2020-02-12 06:23:08', '2020-02-12 06:23:08', NULL),
(14, 'Mortgage', 0, '2020-02-12 06:24:12', '2020-02-12 06:24:12', NULL),
(16, 'Auto/Used Car', 0, '2020-02-12 06:24:51', '2020-02-12 06:24:51', NULL),
(19, 'Two Wheeler', 0, '2020-02-12 06:25:41', '2020-05-25 15:24:10', '0'),
(20, 'Personal Loan', 0, '2020-04-23 19:12:59', '2020-04-23 19:12:59', 'Regular'),
(21, 'Auto Used Car', 0, '2020-04-23 19:13:40', '2020-04-23 19:13:40', 'Fresh Recovery'),
(22, 'Auto/Used Car Loan', 0, '2020-04-29 07:29:41', '2020-05-25 15:24:09', '0-7');

-- --------------------------------------------------------

--
-- Table structure for table `product_users`
--

CREATE TABLE `product_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qcs`
--

CREATE TABLE `qcs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_id` int(11) DEFAULT NULL,
  `audit_id` int(11) DEFAULT NULL,
  `qc_by_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 for pass or 2 faild',
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qm_sheets`
--

CREATE TABLE `qm_sheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qm_sheet_parameters`
--

CREATE TABLE `qm_sheet_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_id` bigint(20) UNSIGNED NOT NULL,
  `parameter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_non_scoring` smallint(6) NOT NULL DEFAULT 0,
  `weight` double(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qm_sheet_sub_parameters`
--

CREATE TABLE `qm_sheet_sub_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_id` bigint(20) UNSIGNED NOT NULL,
  `qm_sheet_parameter_id` bigint(20) UNSIGNED NOT NULL,
  `sub_parameter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `pass` tinyint(4) NOT NULL DEFAULT 0,
  `pass_alert_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fail` tinyint(4) NOT NULL DEFAULT 0,
  `fail_alert_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `critical` tinyint(4) NOT NULL DEFAULT 0,
  `critical_alert_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `na` tinyint(4) NOT NULL DEFAULT 0,
  `na_alert_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pwd` tinyint(4) NOT NULL DEFAULT 0,
  `pwd_alert_box_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `per` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `red_alerts`
--

CREATE TABLE `red_alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sheet_id` int(11) DEFAULT NULL,
  `parameter_id` int(11) DEFAULT NULL,
  `sub_parameter_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audit_id` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `red_alert_answers`
--

CREATE TABLE `red_alert_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `red_alert_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'North', NULL, NULL),
(2, 'East', NULL, NULL),
(3, 'West', NULL, NULL),
(4, 'South', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2019-12-03 10:48:25', '2020-02-25 12:47:02'),
(2, 'Quality Auditor', 'web', '2019-12-03 10:48:46', '2020-03-15 17:39:43'),
(3, 'Collection Manager', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(4, 'Area Collection Manager', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(5, 'Regional Collection Manager', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(6, 'Zonal Collection Manager', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(7, 'National Collection Manager', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(8, 'Group Product Head', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(9, 'Head of the Collections', 'web', '2019-12-05 02:00:46', '2019-12-05 02:00:46'),
(10, 'Quality Control', 'web', '2020-02-25 12:46:37', '2020-02-25 12:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 10),
(2, 2),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `settlement`
--

CREATE TABLE `settlement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `REQUEST_NO` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAN_NO` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CUSTOMERNAME` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BRANCH` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STATE` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCT_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SCHEMEDESC` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENALTY` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOANAMT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMI` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENTAMT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `REQUEST_DATE` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `REQUESTED_BY` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENTSTART_DATE` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENTEND_DATE` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENT_STROKES` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MAKER_REMARKS` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VERIFIER_REMARKS` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VERIFIED_DATE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VERIFIER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APPROVER_REAMRKS` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APPROVED_DATE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APPROVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STATUS1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APPROVED_BY` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STATUS_DATE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APPROVER_EMAIL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_POS` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURRENT_MONTH_INTEREST` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INSTALLMENT_OVERDUE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_PRINCIPAL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_INTEREST` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENALTYCHARGES` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ST_ON_PENALTY` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BOUNCE_CHARGES` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENAL_CHARGES` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTHER_CHARGES` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_DUES` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_POSCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURRENT_MONTH_INTERESTCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INSTALLMENT_OVERDUECOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_PRINCIPALCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_INTERESTCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENALTYCOLLECTED` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ST_ON_FC_CHARGESCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BOUNCE_CHARGESCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENAL_CHARGESCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTHER_CHARGESCOLL` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_AMOUNT_COLLECTED` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_POSWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURRENT_MONTH_INTERESTWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INSTALLMENT_OVERDUEWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_PRINCIPALWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_OVERDUE_INTERESTWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENALTYWIAVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ST_ON_FC_CHARGESWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BOUNCE_CHARGESWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PENAL_CHARGESWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OTHER_CHARGESWAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_WAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_CHARGES_WAIVER` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_of_POS_Waiver` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_of_Charges_Waiver` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BUCKET` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPD` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPDSTRING` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STAGE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAN_STATUS` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAYMENT_RECEIVED` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LAST_PAYMENT_DATE` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SYSTEM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hold_Category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Received_Date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1st_action_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hold_Date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Resolution_Date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Action_Date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Request_received_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TOTAL_SETTLEMENT_AMT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Agency_Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENT_Close_day` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENT_Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAC_Amount` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Online_Amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_Payment_Reacive` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SETTLEMENTAMT_Amount_Status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Amount_Deffrance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCT` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BUCKET_Q` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAC_Received` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Online_pay_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Actual_Date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_GAP` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_GAP_BKT` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Scheme` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `region_id`, `created_at`, `updated_at`) VALUES
(2, 'Andhra Pradesh', 4, NULL, NULL),
(3, 'Arunachal Pradesh', 1, NULL, NULL),
(4, 'Assam', 2, NULL, NULL),
(5, 'Bihar', 2, NULL, NULL),
(6, 'Chandigarh', 1, NULL, NULL),
(7, 'Chhattisgarh', 3, NULL, NULL),
(10, 'Delhi', 1, NULL, NULL),
(11, 'Goa', 3, NULL, NULL),
(12, 'Gujarat', 3, NULL, NULL),
(13, 'Haryana', 1, NULL, NULL),
(14, 'Himachal Pradesh', 1, NULL, NULL),
(15, 'Jammu & Kashmir', 1, NULL, NULL),
(16, 'Jharkhand', 2, NULL, NULL),
(17, 'Karnataka', 4, NULL, NULL),
(18, 'Kerala', 4, NULL, NULL),
(20, 'Madhya Pradesh', 3, NULL, NULL),
(21, 'Maharashtra', 3, NULL, NULL),
(28, 'Punjab', 1, NULL, NULL),
(29, 'Rajasthan', 1, NULL, NULL),
(30, 'Sikkim', 2, NULL, NULL),
(31, 'Tamil Nadu', 4, NULL, NULL),
(32, 'Telangana', 4, NULL, NULL),
(34, 'Uttar Pradesh', 1, NULL, NULL),
(35, 'Uttarakhand', 1, NULL, NULL),
(36, 'West Bengal', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trail_intensity`
--

CREATE TABLE `trail_intensity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agreement_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npa_stage_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bom_bucket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_flag_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bom_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailing_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_manager_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_stamp_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_met` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_payment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptp_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feetback_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposition_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trail_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_stamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `employee_id`) VALUES
(1, 'ravindra', 'ravindra@gmail.com', NULL, '$2y$10$ra5WsER2nUo96RIdAHJZeOJ91aYuLh.gxRpjrD9x4bAA5anqo/hOG', NULL, '2019-10-13 10:31:31', '2019-12-05 07:49:14', '123131231', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yards`
--

CREATE TABLE `yards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yard_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addresss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yard_repos`
--

CREATE TABLE `yard_repos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yard_repo_users`
--

CREATE TABLE `yard_repo_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_plans`
--
ALTER TABLE `action_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_plan_answers`
--
ALTER TABLE `action_plan_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_plan_subs`
--
ALTER TABLE `action_plan_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverse_bukets`
--
ALTER TABLE `adverse_bukets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency_repos`
--
ALTER TABLE `agency_repos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency_repo_users`
--
ALTER TABLE `agency_repo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocations`
--
ALTER TABLE `allocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artifacts`
--
ALTER TABLE `artifacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_alert_boxes`
--
ALTER TABLE `audit_alert_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_parameter_results`
--
ALTER TABLE `audit_parameter_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_results`
--
ALTER TABLE `audit_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beat_plans`
--
ALTER TABLE `beat_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beat_plans_user_id_foreign` (`user_id`);

--
-- Indexes for table `beat_plan_sub_parts`
--
ALTER TABLE `beat_plan_sub_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchables`
--
ALTER TABLE `branchables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_repos`
--
ALTER TABLE `branch_repos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_repo_users`
--
ALTER TABLE `branch_repo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `collector_allocations`
--
ALTER TABLE `collector_allocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dacs`
--
ALTER TABLE `dacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_users`
--
ALTER TABLE `product_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qcs`
--
ALTER TABLE `qcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qm_sheets`
--
ALTER TABLE `qm_sheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qm_sheet_parameters`
--
ALTER TABLE `qm_sheet_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qm_sheet_sub_parameters`
--
ALTER TABLE `qm_sheet_sub_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `red_alerts`
--
ALTER TABLE `red_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `red_alert_answers`
--
ALTER TABLE `red_alert_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_name_index` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settlement`
--
ALTER TABLE `settlement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_region_id_foreign` (`region_id`);

--
-- Indexes for table `trail_intensity`
--
ALTER TABLE `trail_intensity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yards`
--
ALTER TABLE `yards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yard_repos`
--
ALTER TABLE `yard_repos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yard_repo_users`
--
ALTER TABLE `yard_repo_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_plans`
--
ALTER TABLE `action_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `action_plan_answers`
--
ALTER TABLE `action_plan_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `action_plan_subs`
--
ALTER TABLE `action_plan_subs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adverse_bukets`
--
ALTER TABLE `adverse_bukets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agency_repos`
--
ALTER TABLE `agency_repos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agency_repo_users`
--
ALTER TABLE `agency_repo_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allocations`
--
ALTER TABLE `allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artifacts`
--
ALTER TABLE `artifacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_alert_boxes`
--
ALTER TABLE `audit_alert_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_parameter_results`
--
ALTER TABLE `audit_parameter_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_results`
--
ALTER TABLE `audit_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beat_plans`
--
ALTER TABLE `beat_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beat_plan_sub_parts`
--
ALTER TABLE `beat_plan_sub_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branchables`
--
ALTER TABLE `branchables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_repos`
--
ALTER TABLE `branch_repos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_repo_users`
--
ALTER TABLE `branch_repo_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT for table `collector_allocations`
--
ALTER TABLE `collector_allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
