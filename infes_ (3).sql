-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 05:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infes.`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_support`
--

CREATE TABLE `application_support` (
  `id` int(8) NOT NULL,
  `app_email` varchar(100) NOT NULL,
  `application` varchar(50) NOT NULL,
  `app_types` varchar(50) NOT NULL,
  `app_arn` varchar(50) NOT NULL,
  `issue_application` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_support`
--

INSERT INTO `application_support` (`id`, `app_email`, `application`, `app_types`, `app_arn`, `issue_application`, `status`, `created_at`) VALUES
(1, 'princekumar09372@gmail.com', 'refund', 'c4', '784531', 'ljsjldgklns', 'Active', '2023-10-11 05:41:29'),
(2, 'princekumar09372@gmail.com', 'refund', 'c3', '752242', 'lnlnlnl ', 'Active', '2023-10-17 05:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_support`
--

CREATE TABLE `payment_support` (
  `id` int(8) NOT NULL,
  `pay_email` varchar(100) NOT NULL,
  `refund` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `arn` varchar(100) NOT NULL,
  `issue` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_support`
--

INSERT INTO `payment_support` (`id`, `pay_email`, `refund`, `type`, `arn`, `issue`, `status`, `created_at`) VALUES
(1, 'princekumar09372@gmail.com', 'refund', 'c2', '123455as', '', 'Active', '2023-10-09 18:04:52'),
(2, 'princekumar09372@gmail.com', 'refund', 'c2', '12244', '', 'Active', '2023-10-09 18:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `raise_ticket`
--

CREATE TABLE `raise_ticket` (
  `id` int(8) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_service` varchar(100) NOT NULL,
  `r_des` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raise_ticket`
--

INSERT INTO `raise_ticket` (`id`, `r_email`, `r_service`, `r_des`, `status`, `created_at`) VALUES
(1, 'princekumar09372@gmail.com', 'e-pan', 'ljaslfnlnf', 'Active', '2023-10-09 16:43:49'),
(2, 'princekumar09372@gmail.com', 'e-adhar', 'ldjslfnlsnd', 'Active', '2023-10-10 05:53:27'),
(3, 'princekumar09372@gmail.com', 'ibkhbkj', 'igbjhbuyg jh j j', 'Active', '2023-10-20 10:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `refund_support`
--

CREATE TABLE `refund_support` (
  `id` int(8) NOT NULL,
  `refund_email` varchar(100) NOT NULL,
  `refund_pay` varchar(50) NOT NULL,
  `query_types` varchar(50) NOT NULL,
  `arn_no` varchar(50) NOT NULL,
  `issue_refund` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refund_support`
--

INSERT INTO `refund_support` (`id`, `refund_email`, `refund_pay`, `query_types`, `arn_no`, `issue_refund`, `status`, `created_at`) VALUES
(1, 'princekumar09372@gmail.com', 'refund', 'c1', '12345141', 'ljhbnk,', 'Active', '2023-10-10 05:57:51'),
(2, 'princekumar09372@gmail.com', 'refund', 'c1', '1234514112', ',bn ,m ,hb ', 'Active', '2023-10-10 05:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_accounting`
--

CREATE TABLE `user_form_accounting` (
  `id` bigint(15) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_email` varchar(100) NOT NULL,
  `account_phone` bigint(10) NOT NULL,
  `account_addressa` longtext NOT NULL,
  `account_addressb` longtext NOT NULL,
  `account_city` varchar(100) NOT NULL,
  `account_b_type` varchar(100) NOT NULL,
  `account_b_name` varchar(100) NOT NULL,
  `account_regd_date` date NOT NULL,
  `account_service` varchar(100) NOT NULL,
  `account_state` varchar(100) NOT NULL,
  `account_country` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_accounting`
--

INSERT INTO `user_form_accounting` (`id`, `account_name`, `account_email`, `account_phone`, `account_addressa`, `account_addressb`, `account_city`, `account_b_type`, `account_b_name`, `account_regd_date`, `account_service`, `account_state`, `account_country`, `status`, `created_at`) VALUES
(10000000000002, 'Prince kumar', 'princekumar09372@gmail.com', 6206572093, 'address1', 'address 2', 'Motihari', '”inl”', 'ismart', '2023-11-14', 'gstfile', '”Bihar”', '”India”', 'Pending for Validation', '2023-11-07 14:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_agri`
--

CREATE TABLE `user_form_agri` (
  `id` bigint(15) NOT NULL,
  `agri_name` varchar(100) NOT NULL,
  `agri_email` varchar(100) NOT NULL,
  `agri_phone` bigint(10) NOT NULL,
  `agri_addressa` longtext NOT NULL,
  `agri_addressb` longtext NOT NULL,
  `agri_city` varchar(100) NOT NULL,
  `agri_service` varchar(100) NOT NULL,
  `agri_state` varchar(100) NOT NULL,
  `agri_country` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_agri`
--

INSERT INTO `user_form_agri` (`id`, `agri_name`, `agri_email`, `agri_phone`, `agri_addressa`, `agri_addressb`, `agri_city`, `agri_service`, `agri_state`, `agri_country`, `status`, `created_at`) VALUES
(1000000000002, 'Prince', 'princekumar09372@gmail.com', 6206572093, 'address1', 'address 2', 'Motihari', 'lpgcon', '”Bihar”', '”India”', 'Pending for Validation', '2023-11-07 14:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_district`
--

CREATE TABLE `user_form_district` (
  `id` bigint(15) NOT NULL,
  `service` varchar(100) NOT NULL,
  `form_name` varchar(100) NOT NULL,
  `form_father_name` varchar(150) NOT NULL,
  `form_mother_name` varchar(150) NOT NULL,
  `form_gender` varchar(20) NOT NULL,
  `form_mobile` bigint(10) NOT NULL,
  `form_landmark` longtext NOT NULL,
  `form_block` varchar(100) NOT NULL,
  `form_district` varchar(100) NOT NULL,
  `form_pincode` int(6) NOT NULL,
  `form_post` varchar(100) NOT NULL,
  `form_state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `form_email` varchar(150) NOT NULL,
  `form_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_district`
--

INSERT INTO `user_form_district` (`id`, `service`, `form_name`, `form_father_name`, `form_mother_name`, `form_gender`, `form_mobile`, `form_landmark`, `form_block`, `form_district`, `form_pincode`, `form_post`, `form_state`, `country`, `form_email`, `form_date`, `status`, `created_at`) VALUES
(100000000002, 'Domicile Certificate', 'Prince', '', '', 'male', 6206572093, 'Baxa', 'Motihari', 'East champaran', 845401, '', 'bihar', '', '', '2023-10-25', 'Pending for Validation', '2023-10-23 17:45:21'),
(100000000003, 'Affidavit of address', 'Prince', '', '', 'male', 6206572093, 'Baxa', 'Motihari', 'East champaran', 845401, '', 'bihar', '', '', '2023-10-26', 'Pending for Validation', '2023-10-23 18:00:14'),
(100000000004, 'Proof of income', 'Prince', '', '', 'male', 6206572093, 'Baxa', 'Motihari', 'East champaran', 845401, '', 'bihar', '', '', '2023-10-27', 'Pending for Validation', '2023-10-23 18:04:16'),
(100000000005, 'gap certificate', 'Prince', '', '', 'male', 6206572093, 'Baxa', 'Motihari', 'East champaran', 845401, '', 'bihar', '', '', '2023-10-25', 'Pending for Validation', '2023-10-23 18:06:12'),
(100000000006, 'gap certificate', 'Prakhar', '', '', 'male', 8541237895, 'Hardoi', 'sh', 'shahabad', 245789, '', 'Uttar pradesh', '', '', '2023-10-25', 'Pending for Validation', '2023-10-23 18:26:38'),
(100000000007, 'gap certificate', 'Prakhar', '', '', 'male', 8541237895, 'Hardoi', 'sh', 'shahabad', 245789, '', 'Uttar pradesh', '', '', '2023-10-25', 'Pending for Validation', '2023-10-23 18:29:48'),
(100000000008, 'Affidavit of address', 'Prakhar', '', '', 'male', 8459632174, 'Hardoi', 'sh', 'shahabad', 214785, '', 'Uttar pradesh', '', '', '2023-10-27', 'Pending for Validation', '2023-10-23 18:30:41'),
(100000000009, 'Affidavit of address', 'Utpal', '', '', 'male', 8451236945, 'Hardoi', 'Motihari', 'shahabad', 248751, '', 'Uttar pradesh', '', '', '2023-10-26', 'Pending for Validation', '2023-10-23 18:33:58'),
(100000000010, '$district_service', '$name', '$f_h_name', '$mother_name', '$gender', 0, '$landmark', '$block', '$district', 0, '$post', '$state', '$country', '', '0000-00-00', 'Pending for Validation', '2023-10-26 05:43:31'),
(100000000011, 'opension', 'Prince kumar', 'Sanjay kumar chaudhary', '', 'male', 6206572093, '', 'sugauli', 'East champaran', 845401, 'Raghunathpur bazar', 'Bihar', '”India”', '', '2023-10-28', 'Pending for Validation', '2023-10-26 05:45:17'),
(100000000013, '$district_service', '$name', '$f_h_name', '$mname', '$gender', 0, '$landmark', '$block', '$district', 0, '$post', '$state', '$country', '', '0000-00-00', 'Pending for Validation', '2023-10-26 06:00:11'),
(100000000014, 'opension', 'Prince kumar', 'Sanjay kumar chaudhary', 'seema kumari', 'male', 6206572093, 'ward no-04', 'sugauli', 'East champaran', 845401, 'Raghunathpur', 'Bihar', '”India”', '', '2023-10-28', 'Pending for Validation', '2023-10-26 06:03:12'),
(100000000015, 'opension', 'Prince kumar', 'Sanjay kumar chaudhary', 'seema kumari', 'male', 6206572093, 'ward no-04', 'sugauli', 'East champaran', 845401, 'Raghunathpur', 'Bihar', '”India”', 'princekumar09372@gmail.com', '2023-11-23', 'Pending for Validation', '2023-11-07 14:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_individual`
--

CREATE TABLE `user_form_individual` (
  `id` bigint(15) NOT NULL,
  `individual_name` varchar(100) NOT NULL,
  `individal_father` varchar(100) NOT NULL,
  `individual_mother` varchar(100) NOT NULL,
  `individual_gender` varchar(50) NOT NULL,
  `individaual_date` date NOT NULL,
  `individual_phone` int(10) NOT NULL,
  `individual_houses` longtext NOT NULL,
  `individual_district` varchar(100) NOT NULL,
  `individual_pincode` int(8) NOT NULL,
  `individual_service` varchar(100) NOT NULL,
  `individaul_action` varchar(50) NOT NULL,
  `individual_state` varchar(100) NOT NULL,
  `individual_country` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_individual`
--

INSERT INTO `user_form_individual` (`id`, `individual_name`, `individal_father`, `individual_mother`, `individual_gender`, `individaual_date`, `individual_phone`, `individual_houses`, `individual_district`, `individual_pincode`, `individual_service`, `individaul_action`, `individual_state`, `individual_country`, `email`, `status`, `created_at`) VALUES
(10000000002, 'Prince kumar', '', 'seema kumari', 'male', '2023-11-15', 2147483647, 'ward no-04', 'East champaran', 845401, 'pan', 'enrol', '”Bihar”', '”India”', 'princekumar09372@gmail.com', 'Pending for Validation', '2023-11-07 14:21:30'),
(10000000003, 'Prince kumar', '', 'seema kumari', 'male', '2023-11-15', 2147483647, 'ward no-04', 'East champaran', 845401, 'pan', 'enrol', '”Bihar”', '”India”', 'princekumar09372@gmail.com', 'Pending for Validation', '2023-11-07 14:23:11'),
(10000000004, 'Prince kumar', 'Sanjay kumar chaudhary', 'seema kumari', 'male', '2023-11-22', 2147483647, 'ward no-04', 'East champaran', 845401, 'driving', 'enrol', '”Bihar”', '”India”', 'princekumar09372@gmail.com', 'Pending for Validation', '2023-11-16 03:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_legal`
--

CREATE TABLE `user_form_legal` (
  `id` bigint(15) NOT NULL,
  `legal_name` varchar(100) NOT NULL,
  `legal_father_name` varchar(100) NOT NULL,
  `legal_gender` varchar(100) NOT NULL,
  `legal_email` varchar(100) NOT NULL,
  `legal_phone` bigint(10) NOT NULL,
  `legal_occupation` varchar(150) NOT NULL,
  `legal_service` varchar(100) NOT NULL,
  `legal_state` varchar(100) NOT NULL,
  `legal_country` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_legal`
--

INSERT INTO `user_form_legal` (`id`, `legal_name`, `legal_father_name`, `legal_gender`, `legal_email`, `legal_phone`, `legal_occupation`, `legal_service`, `legal_state`, `legal_country`, `status`, `created_at`) VALUES
(1000000002, 'Prince kumar', 'Sanjay kumar', 'male', 'princekumar09372@gmail.com', 6206572093, 'student', 'poa', '”Bihar”', '”India”', 'Pending for Validation', '2023-11-07 14:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_mca`
--

CREATE TABLE `user_form_mca` (
  `mca_name` varchar(100) NOT NULL,
  `mca_date` date NOT NULL,
  `mca_gender` varchar(50) NOT NULL,
  `mca_service` varchar(50) NOT NULL,
  `mca_director` int(10) NOT NULL,
  `mca_a_capital` int(11) NOT NULL,
  `mca_p_capital` int(11) NOT NULL,
  `mca_shares` int(11) NOT NULL,
  `mca_pincode` int(11) NOT NULL,
  `mca_district` varchar(100) NOT NULL,
  `mca_state` varchar(110) NOT NULL,
  `mca_country` varchar(110) NOT NULL,
  `mca_phone` int(11) NOT NULL,
  `mca_email` varchar(150) NOT NULL,
  `id` bigint(15) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending for validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_mca`
--

INSERT INTO `user_form_mca` (`mca_name`, `mca_date`, `mca_gender`, `mca_service`, `mca_director`, `mca_a_capital`, `mca_p_capital`, `mca_shares`, `mca_pincode`, `mca_district`, `mca_state`, `mca_country`, `mca_phone`, `mca_email`, `id`, `status`, `created_at`) VALUES
('Prince kumar', '2023-11-02', 'male', 'pvtltd', 4, 7412, 2154, 124, 845401, 'East champaran', '”Bihar”', '”India”', 2147483647, 'princekumar09372@gmail.com', 2, 'Pending for validation', '2023-10-30 17:00:15'),
('Prince kumar', '2023-11-15', 'male', 'pvtltd', 3, 54000, 50000, 15000, 845401, 'East champaran', '”Bihar”', '”India”', 2147483647, 'princekumar09372@gmail.com', 100000002, 'Pending for validation', '2023-11-07 14:18:10'),
('Prince kumar', '2023-11-23', 'male', 'pvtltd', 2, 100000, 50000, 842214, 845401, 'East champaran', '”Bihar”', '”India”', 2147483647, 'princekumar09372@gmail.com', 100000003, 'Pending for validation', '2023-11-17 11:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_msme`
--

CREATE TABLE `user_form_msme` (
  `id` bigint(15) NOT NULL,
  `msme_name` varchar(100) NOT NULL,
  `msme_father` varchar(100) NOT NULL,
  `msme_gender` varchar(50) NOT NULL,
  `msme_email` varchar(150) NOT NULL,
  `msme_phone` int(10) NOT NULL,
  `msme_occupation` varchar(100) NOT NULL,
  `msme_b_name` varchar(100) NOT NULL,
  `msme_b_date` date NOT NULL,
  `msme_service` varchar(100) NOT NULL,
  `msme_state` varchar(100) NOT NULL,
  `msme_country` varchar(100) NOT NULL,
  `msme_b_type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_msme`
--

INSERT INTO `user_form_msme` (`id`, `msme_name`, `msme_father`, `msme_gender`, `msme_email`, `msme_phone`, `msme_occupation`, `msme_b_name`, `msme_b_date`, `msme_service`, `msme_state`, `msme_country`, `msme_b_type`, `status`, `created_at`) VALUES
(10000002, 'Prince kumar', 'Sanjay kumar chaudhary', 'male', 'princekumar09372@gmail.com', 2147483647, 'student', 'ismart', '2023-11-22', 'copyright', '”Bihar”', '”India”', 'msme', 'Pending for Validation', '2023-11-07 14:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_pension`
--

CREATE TABLE `user_form_pension` (
  `id` bigint(15) NOT NULL,
  `pension_name` varchar(100) NOT NULL,
  `pension_f_h_name` varchar(100) NOT NULL,
  `pension_date` date NOT NULL,
  `pension_gender` varchar(50) NOT NULL,
  `pension_service` varchar(50) NOT NULL,
  `pension_block` varchar(100) NOT NULL,
  `pension_district` varchar(100) NOT NULL,
  `pension_pincode` int(8) NOT NULL,
  `pension_state` varchar(100) NOT NULL,
  `pension_country` varchar(100) NOT NULL,
  `pension_phone` int(10) NOT NULL,
  `pension_email` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_pension`
--

INSERT INTO `user_form_pension` (`id`, `pension_name`, `pension_f_h_name`, `pension_date`, `pension_gender`, `pension_service`, `pension_block`, `pension_district`, `pension_pincode`, `pension_state`, `pension_country`, `pension_phone`, `pension_email`, `status`, `created_at`) VALUES
(1000002, 'Prince kumar', 'Sanjay kumar chaudhary', '2023-11-08', 'male', 'opension', 'sugauli', 'East champaran', 845401, '”Bihar”', '”India”', 2147483647, 'princekumar09372@gmail.com', 'Pending for Validation', '2023-11-07 14:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_roc`
--

CREATE TABLE `user_form_roc` (
  `id` bigint(15) NOT NULL,
  `roc_fdirector` varchar(150) NOT NULL,
  `roc_sdirector` varchar(150) NOT NULL,
  `roc_a_s` varchar(150) NOT NULL,
  `roc_email` varchar(150) NOT NULL,
  `roc_phone` bigint(10) NOT NULL,
  `roc_alt_phone` bigint(10) NOT NULL,
  `roc_company` varchar(150) NOT NULL,
  `roc_c_id` bigint(15) NOT NULL,
  `roc_type` varchar(150) NOT NULL,
  `roc_service` varchar(100) NOT NULL,
  `roc_state` varchar(100) NOT NULL,
  `roc_country` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending for Validation',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_roc`
--

INSERT INTO `user_form_roc` (`id`, `roc_fdirector`, `roc_sdirector`, `roc_a_s`, `roc_email`, `roc_phone`, `roc_alt_phone`, `roc_company`, `roc_c_id`, `roc_type`, `roc_service`, `roc_state`, `roc_country`, `status`, `created_at`) VALUES
(100002, 'Prince kumar', '', 'Prakhar', 'princekumar09372@gmail.com', 6206572093, 9661845436, 'ismart', 12345, 'private', 'inc20d', '”Bihar”', '”India”', 'Pending for Validation', '2023-11-07 14:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_student`
--

CREATE TABLE `user_form_student` (
  `id` bigint(15) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `student_father` varchar(150) NOT NULL,
  `student_mother` varchar(150) NOT NULL,
  `student_gender` varchar(50) NOT NULL,
  `student_date` date NOT NULL,
  `student_phone` varchar(100) NOT NULL,
  `student_block` varchar(100) NOT NULL,
  `student_district` varchar(100) NOT NULL,
  `student_pin` int(8) NOT NULL,
  `student_service` varchar(100) NOT NULL,
  `student_state` varchar(100) NOT NULL,
  `student_country` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending for validation',
  `student_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_student`
--

INSERT INTO `user_form_student` (`id`, `student_name`, `student_father`, `student_mother`, `student_gender`, `student_date`, `student_phone`, `student_block`, `student_district`, `student_pin`, `student_service`, `student_state`, `student_country`, `email`, `status`, `student_created_at`) VALUES
(1002, 'Prince', 'sanjay kumar chaudhary', 'seema kumari', 'male', '2023-11-09', '6206572093', 'suguali', 'east champaran', 845401, 'lafsl', 'bihar', 'india', '', 'Pending for validation', '2023-11-01 17:24:15'),
(1004, 'Prince kumar', 'sanjay kumar chaudhary', 'seema kumari', 'male', '2023-11-23', '', '6206572093', 'East champaran', 845401, 'cona', '”Bihar”', '”India”', 'princekumar09372@gmail.com', 'Pending for validation', '2023-11-07 14:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `mobile`, `email`, `password`, `status`, `created_at`) VALUES
(3, 'Prince', 6206572093, 'princekumar09372@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Active', '2023-10-06 10:40:45'),
(7, 'Utpal', 5646565114, 'utpal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Active', '2023-10-06 10:58:02'),
(8, 'Prakhar', 8455221231, 'prakhar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Active', '2023-10-06 14:45:30'),
(9, 'rahul', 8451220147, 'rahul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Active', '2023-10-06 14:57:21'),
(12, 'Paras pathania', 8837500118, 'paras@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2023-11-08 04:45:31'),
(13, 'User', 98745123641, 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2024-03-22 09:40:28'),
(14, 'abcd', 9874512364, 'abcd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2024-03-28 10:55:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_support`
--
ALTER TABLE `application_support`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `app_arn` (`app_arn`);

--
-- Indexes for table `payment_support`
--
ALTER TABLE `payment_support`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `arn` (`arn`);

--
-- Indexes for table `raise_ticket`
--
ALTER TABLE `raise_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refund_support`
--
ALTER TABLE `refund_support`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `arn_no` (`arn_no`);

--
-- Indexes for table `user_form_accounting`
--
ALTER TABLE `user_form_accounting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_agri`
--
ALTER TABLE `user_form_agri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_district`
--
ALTER TABLE `user_form_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_individual`
--
ALTER TABLE `user_form_individual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_legal`
--
ALTER TABLE `user_form_legal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_mca`
--
ALTER TABLE `user_form_mca`
  ADD PRIMARY KEY (`id`,`mca_date`);

--
-- Indexes for table `user_form_msme`
--
ALTER TABLE `user_form_msme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_pension`
--
ALTER TABLE `user_form_pension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_roc`
--
ALTER TABLE `user_form_roc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_student`
--
ALTER TABLE `user_form_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_support`
--
ALTER TABLE `application_support`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_support`
--
ALTER TABLE `payment_support`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `raise_ticket`
--
ALTER TABLE `raise_ticket`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refund_support`
--
ALTER TABLE `refund_support`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_form_accounting`
--
ALTER TABLE `user_form_accounting`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000000003;

--
-- AUTO_INCREMENT for table `user_form_agri`
--
ALTER TABLE `user_form_agri`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000000003;

--
-- AUTO_INCREMENT for table `user_form_district`
--
ALTER TABLE `user_form_district`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000000016;

--
-- AUTO_INCREMENT for table `user_form_individual`
--
ALTER TABLE `user_form_individual`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000005;

--
-- AUTO_INCREMENT for table `user_form_legal`
--
ALTER TABLE `user_form_legal`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000003;

--
-- AUTO_INCREMENT for table `user_form_mca`
--
ALTER TABLE `user_form_mca`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000004;

--
-- AUTO_INCREMENT for table `user_form_msme`
--
ALTER TABLE `user_form_msme`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000003;

--
-- AUTO_INCREMENT for table `user_form_pension`
--
ALTER TABLE `user_form_pension`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000003;

--
-- AUTO_INCREMENT for table `user_form_roc`
--
ALTER TABLE `user_form_roc`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `user_form_student`
--
ALTER TABLE `user_form_student`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
