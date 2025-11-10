-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 04:58 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'admin',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `contact_number`, `password`, `profile_image`, `role`, `created_at`) VALUES
(1, 'a', 'a@gmail.com', '9427573193', '147', 't1.png', 'admin', '2025-07-06 09:01:00'),
(6, 'tanvi', 'tanu@gmail.com', '9427573193', '123123', '1752012109_g1.jpg', 'admin', '2025-07-09 00:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `employer_id`, `title`, `content`, `image`, `status`, `created_at`) VALUES
(2, 9, 'How to Build a Professional Resume', 'Preparing for interviews can be stressful, especially for freshers. In this blog, we will cover 5 essential tips to help you succeed.', '1751927384_image-04.jpg', 'Approved', '2025-07-08 03:59:44'),
(3, 9, 'Insider Strategies for Success on Job Websites', 'Lorem Ipsum blog 3', '1753134576_samsung.png', 'Approved', '2025-07-22 03:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `company_name`, `description`) VALUES
(1, 'abc', 'web developer');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_description` text,
  `working_schedule` varchar(50) DEFAULT NULL,
  `working_day` varchar(50) DEFAULT NULL,
  `salary_type` varchar(50) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `salary_min` varchar(100) DEFAULT NULL,
  `salary_max` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `deadline` varchar(50) DEFAULT NULL,
  `video_url` text,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` text,
  `postal_code` varchar(20) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_name`, `job_title`, `job_description`, `working_schedule`, `working_day`, `salary_type`, `payment_type`, `salary_min`, `salary_max`, `experience`, `qualification`, `deadline`, `video_url`, `country`, `state`, `address`, `postal_code`, `latitude`, `longitude`, `profile_image`, `created_at`) VALUES
(1, 'google', 'web developer', 'asss', 'Day Shift', 'Mon - Fri', 'Monthly', 'Monthly', '2000 - 2500', '3000 - 3500', '1.5 year', 'BCA ', '25/8/2025', 'https://www.youtube.com/watch?v=abcd1234xyz', 'India', 'gujarat', 'moravada', '63618', '1', '1', '../images/google.png', '2025-07-05 22:02:37'),
(2, 'lg', 'softwere developer', 'awsxadxs', 'Day Shift', 'Mon - Fri', 'Monthly', 'Monthly', '2000 - 2500', '3000 - 3500', '1.5 year', 'MBCA ', '25/8/2025', 'https://www.youtube.com/watch?v=abcd1234xyz', 'Bangladesh', 'gujarat', 'jolhds', '63618', '154', '12.0000', '../images/lg.png', '2025-07-15 22:25:02'),
(3, 'lg', 'web developer', 'sadsd', 'Night Shift', 'Mon - Fri', 'Monthly', 'Yearly', '2000 - 2500', '3000 - 3500', '1 Year, 2-3 Years, Freshers', 'BCA ', '25/8/2025', 'https://www.youtube.com/watch?v=abcd1234xyz', 'Nepal', 'gujarat', 'jolhds', '63618', '154', '1', '../images/lg.png', '2025-07-15 23:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `question`, `email`) VALUES
(1, 'tanvi', 'php', 'hii\r\n', 'tanubhayani05@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE `employee_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `founded_date` varchar(20) DEFAULT NULL,
  `company_size` varchar(50) DEFAULT NULL,
  `company_category` varchar(100) DEFAULT NULL,
  `profile_view` varchar(10) DEFAULT NULL,
  `profile_url` varchar(255) DEFAULT NULL,
  `description` text,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `behance` varchar(255) DEFAULT NULL,
  `dribbble` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` text,
  `postal_code` varchar(20) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_profile`
--

INSERT INTO `employee_profile` (`id`, `name`, `email`, `phone`, `website`, `founded_date`, `company_size`, `company_category`, `profile_view`, `profile_url`, `description`, `facebook`, `linkedin`, `behance`, `dribbble`, `country`, `state`, `address`, `postal_code`, `latitude`, `longitude`, `profile_image`, `created_at`) VALUES
(1, 'tanvi', 'tanu@gmail.com', '3595355133', 'https://youtu.be/YZVAVxI7qnU?si=yB3I6dtAJk7fcv3o', '2/11/2005', '20-30', 'Digital Marketing', 'No', 'https://jobpath.com/wp-demo/jobpath/employer/empl', 'asxkjdhsjgcfv', NULL, NULL, NULL, NULL, 'India', 'Gujarat', 'jolhds', '63618', '154', '324', '../images/IMG20220107081235.jpg', '2025-07-05 03:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `job_openings` int(11) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `company_name`, `location`, `logo_image`, `job_openings`, `status`) VALUES
(2, 'LG', 'New York, USA', 'lg.png', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `e_contact`
--

CREATE TABLE `e_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_contact`
--

INSERT INTO `e_contact` (`id`, `name`, `email`, `comment`) VALUES
(1, 'tanvi', 'tanu@gmail.com', ''),
(2, 'tanvi', 'tanu@gmail.com', ''),
(3, 'tanvi', 'tanu@gmail.com', 'hii\r\nwhere are you?'),
(4, 'tanvi', 'tanu@gmail.com', 'hii\r\nwhere are you?'),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `e_registration`
--

CREATE TABLE `e_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'employee',
  `profile_image` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_registration`
--

INSERT INTO `e_registration` (`id`, `name`, `email`, `password`, `role`, `profile_image`, `created_at`) VALUES
(6, 'darpana', 'darpana@gmail.com', '123123', 'employee', '2.jpg', '2025-07-20 09:55:27'),
(7, 'trushali', 'trushali@gmail.com', '147147', 'employee', 't.jpeg', '2025-07-20 09:55:27'),
(8, 'nensi', 'nensi@gmail.com', '258258', 'employee', 'IMG-20250616-WA0019.jpg', '2025-07-20 09:55:27'),
(9, 'tanvi', 'tanu@gmail.com', '369369', 'employee', 'IMG_20240316_100838.jpg', '2025-07-20 09:55:27'),
(10, 'kyati', 'khyati@gmail.com', '456456', 'employee', 'k.jpg', '2025-07-20 09:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `message`, `created_at`) VALUES
(1, 3, 'hii', '2025-07-21 04:17:46'),
(2, 1, 'good webside', '2025-07-21 04:18:06'),
(3, 3, '52', '2025-07-21 04:43:11'),
(4, 3, '15', '2025-07-21 04:48:52'),
(9, 1, 's', '2025-07-21 05:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `funfacts`
--

CREATE TABLE `funfacts` (
  `id` int(11) NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT '',
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funfacts`
--

INSERT INTO `funfacts` (`id`, `number`, `label`, `suffix`, `status`) VALUES
(1, '20', 'Happy Employer', 'K', 'active'),
(2, '11', 'Opening Position', 'K', 'active'),
(3, '1', 'Daily active users', 'M', 'active'),
(4, '100', 'Job Categories', '+', 'active'),
(5, '2165498562332313', 'smile', '+', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `interview_schedule`
--

CREATE TABLE `interview_schedule` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_time` time DEFAULT NULL,
  `interview_mode` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_schedule`
--

INSERT INTO `interview_schedule` (`id`, `candidate_id`, `employer_id`, `interview_date`, `interview_time`, `interview_mode`, `location`, `status`, `created_at`) VALUES
(1, 1, 9, '2025-07-01', '04:32:00', 'Offline', 'junagadh', 'Completed', '2025-07-13 21:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `job_description` text,
  `working_schedule` varchar(100) DEFAULT NULL,
  `working_day` varchar(100) DEFAULT NULL,
  `salary_type` varchar(100) DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `salary_min` varchar(100) DEFAULT NULL,
  `salary_max` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` text,
  `postal_code` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `post_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `company_name`, `job_title`, `image`, `job_description`, `working_schedule`, `working_day`, `salary_type`, `payment_type`, `salary_min`, `salary_max`, `experience`, `qualification`, `deadline`, `video_url`, `country`, `state`, `address`, `postal_code`, `latitude`, `longitude`, `post_date`) VALUES
(1, 9, 'google', 'web developer', 'google.png', 'Job responsibilities and required skills', 'Full-time', 'Monday to Friday', 'month', 'Fixed', '30000', '60000', '1.5 year', 'BCA, MCA, ', '2025-07-17', '', 'India', 'Gujarat', 'junagadh', '362020', '1.0000', '12.0000', NULL),
(13, 9, 'LG', 'web developer', 'lg.png', 'LG company', 'Full-time', 'Monday to Friday', 'month', 'Fixed', '25000', '50000', '1.5 year', 'BCA, MCA, ', '2025-07-10', '', 'India', 'Gujarat', 'jnd', '362020', '1.0000', '324', '2025-07-16'),
(14, 6, 'whirlpool', 'full stack', 'whirlpool.png', 'cdinddshfksd', 'Full-time', 'Monday to Friday', 'month', 'Fixed, Hourly', '30000', '500000', '2 year', 'BCA, MCA, ', '2026-02-27', '', 'India', 'mumbai', 'mumbai', '362020', '', '', '2025-08-24'),
(15, 9, 'Google', 'Software Engineer', 'google.png', 'Develop scalable web applications using Java and React.', 'Full-time', 'Mon-Fri', 'Monthly', 'Bank Transfer', '80000', '120000', '2+ years', 'B.Tech / M.Tech', '2025-10-15', 'https://youtu.be/abc123', 'USA', 'California', '1600 Amphitheatre Parkway, Mountain View', '94043', '37.4220', '-122.0841', '2025-09-12'),
(16, 10, 'Microsoft', 'Cloud Engineer', 'microsoft.jpg', 'Work on Azure cloud deployment and automation.', 'Full-time', 'Mon-Fri', 'Monthly', 'Bank Transfer', '75000', '115000', '3+ years', 'B.E / MCA', '2025-10-20', 'https://youtu.be/def456', 'USA', 'Washington', 'One Microsoft Way, Redmond', '98052', '47.6401', '-122.1298', '2025-09-12'),
(17, 6, 'Amazon', 'Data Scientist', 'amazon.png', 'Build ML models to improve e-commerce recommendations.', 'Hybrid', 'Mon-Sat', 'Yearly', 'Direct Deposit', '90000', '140000', '4+ years', 'MSc / PhD in Data Science', '2025-11-01', 'https://youtu.be/ghi789', 'India', 'Karnataka', 'World Trade Centre, Bangalore', '560055', '12.9716', '77.5946', '2025-09-12'),
(18, 7, 'Infosys', 'Full Stack Developer', 'infosys.jpg', 'Develop end-to-end web applications with MERN stack.', 'Full-time', 'Mon-Fri', 'Monthly', 'UPI / Bank Transfer', '45000', '70000', '1+ year', 'BCA / B.Tech', '2025-10-05', 'https://youtu.be/jkl012', 'India', 'Maharashtra', 'Infosys SEZ, Pune', '411057', '18.5204', '73.8567', '2025-09-12'),
(19, 8, 'Tesla', 'Embedded Systems Engineer', 'tesla.jpg', 'Design and test embedded software for electric vehicles.', 'Full-time', 'Mon-Fri', 'Monthly', 'Bank Transfer', '100000', '160000', '5+ years', 'B.Tech in Electronics', '2025-12-01', 'https://youtu.be/mno345', 'USA', 'Texas', '13101 Tesla Road, Austin', '78725', '30.2220', '-97.6170', '2025-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `job_alerts`
--

CREATE TABLE `job_alerts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alert_type` varchar(100) DEFAULT NULL,
  `location_salary` varchar(255) DEFAULT NULL,
  `jobs_found` int(11) DEFAULT '0',
  `frequency` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_alerts`
--

INSERT INTO `job_alerts` (`id`, `user_id`, `title`, `alert_type`, `location_salary`, `jobs_found`, `frequency`, `created_at`) VALUES
(1, 1, 'Frontend Developer Alert', 'Full-Time', 'Ahmedabad | ?4-6 LPA', 12, 'Daily', '2025-07-13 08:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `applied_date` date DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `cover_letter` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `job_id`, `status`, `applied_date`, `resume`, `cover_letter`) VALUES
(1, 1, 1, 'Shortlisted', '2025-07-10', '686f4067c474a.pdf', '123dlkjds'),
(3, 1, 13, 'Rejected', '2025-07-16', 'Your paragraph text (1).pdf', 'sdds'),
(4, 1, 14, 'Accepted', '2025-08-24', 'Your paragraph text (1).pdf', 'sdsff'),
(7, 3, 13, 'Accepted', NULL, '1756849752_Your paragraph text (1).pdf', 'sdc'),
(8, 3, 14, 'Shortlisted', NULL, 'Your paragraph text (1).pdf', 'sdd'),
(9, 3, 1, NULL, NULL, 'Your paragraph text (1).pdf', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender_role` varchar(20) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_role` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `sent_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `sender_role`, `receiver_id`, `receiver_role`, `message`, `is_read`, `sent_at`) VALUES
(1, 1, 'employee', 1, 'user', 'hii', 0, '2025-07-06 09:39:53'),
(2, 1, 'employee', 1, 'admin', 'hii', 0, '2025-07-06 09:39:59'),
(3, 1, 'user', 7, 'employee', 'hii', 0, '2025-07-07 09:38:35'),
(4, 1, 'user', 9, 'employee', 'hii', 1, '2025-07-07 09:39:56'),
(5, 1, 'user', 9, 'employee', 'skc', 1, '2025-07-07 09:40:00'),
(6, 1, 'user', 6, 'employee', 'hii', 1, '2025-07-07 09:44:52'),
(7, 1, 'user', 6, 'employee', 'skc', 1, '2025-07-07 09:44:57'),
(8, 6, 'employee', 1, 'user', 'hii', 0, '2025-07-07 10:09:57'),
(9, 1, 'user', 6, 'employee', 'how are you', 1, '2025-07-07 10:37:35'),
(10, 1, 'user', 6, 'employee', '?', 1, '2025-07-07 10:37:44'),
(11, 1, 'user', 6, 'employee', '123', 1, '2025-07-07 10:41:28'),
(12, 1, 'user', 6, 'employee', 'ok', 1, '2025-07-07 10:46:35'),
(13, 1, 'user', 8, 'employee', 'hii', 0, '2025-07-08 01:51:55'),
(14, 9, 'employee', 6, 'admin', 'hii', 0, '2025-07-09 03:44:36'),
(15, 6, 'admin', 1, 'user', 'hii', 0, '2025-07-20 09:24:03'),
(16, 1, 'user', 6, 'admin', 'skc', 0, '2025-07-20 09:24:23'),
(17, 1, 'user', 7, 'employee', 'hii', 0, '2025-09-12 09:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `profile_data`
--

CREATE TABLE `profile_data` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age_range` varchar(20) DEFAULT NULL,
  `salary_type` varchar(20) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `categories` varchar(100) DEFAULT NULL,
  `show_profile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_data`
--

INSERT INTO `profile_data` (`id`, `full_name`, `phone`, `gender`, `salary`, `experience`, `location`, `job_title`, `dob`, `email`, `age_range`, `salary_type`, `qualification`, `language`, `categories`, `show_profile`) VALUES
(1, 'tanu bhayani', '9510880062', 'Female', '25000', '1.5 year', 'junagadh', 'web developer', '2005-11-02', 'tanu@gmail.com', '20', 'month', 'bca', 'english', 'it', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'candidate',
  `country` varchar(110) NOT NULL,
  `state` varchar(110) NOT NULL,
  `city` varchar(110) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contact_number`, `dob`, `password`, `profile_image`, `role`, `country`, `state`, `city`, `pincode`, `created_at`) VALUES
(1, 'tanvi bhayani', 'tanu@gmail.com', '99510880062', '2005-11-02', '123', 't1.jpg', 'candidate', 'India', 'gujarat', 'junagadh', '362020', '2025-07-20 09:55:05'),
(3, 'bansi', 'darpanachauhan11@gmail.com', '5178420322165465', '2025-07-05', '123', 'kakariyatadav.jpg', 'candidate', 'maharastra', 'mumbai', 'imagica', '362020', '2025-07-20 09:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `name`, `file_name`, `file_path`, `uploaded_at`) VALUES
(1, 1, 'tanvi bhayani', 'Your paragraph text (1).pdf', '../resume/resume_6869b5ef395528.54093270.pdf', '2025-07-06 05:01:59'),
(2, 1, 'tanvi bhayani', 'Your paragraph text (1).pdf', '../resume/resume_6876cd25628271.86643547.pdf', '2025-07-16 03:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `job_id`, `rating`, `comment`, `created_at`) VALUES
(4, 1, 1, 5, 'Great job opportunity!', '2025-07-21 03:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `saved_jobs`
--

CREATE TABLE `saved_jobs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `saved_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved_jobs`
--

INSERT INTO `saved_jobs` (`id`, `user_id`, `job_id`, `saved_date`) VALUES
(2, 1, 0, '2025-07-11 10:15:36'),
(3, 101, 0, '2025-07-21 09:31:29'),
(4, 1, 13, '2025-08-24 04:20:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_contact`
--
ALTER TABLE `e_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_registration`
--
ALTER TABLE `e_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funfacts`
--
ALTER TABLE `funfacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_schedule`
--
ALTER TABLE `interview_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_alerts`
--
ALTER TABLE `job_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_data`
--
ALTER TABLE `profile_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_profile`
--
ALTER TABLE `employee_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e_contact`
--
ALTER TABLE `e_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e_registration`
--
ALTER TABLE `e_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `funfacts`
--
ALTER TABLE `funfacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interview_schedule`
--
ALTER TABLE `interview_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job_alerts`
--
ALTER TABLE `job_alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profile_data`
--
ALTER TABLE `profile_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `interview_schedule`
--
ALTER TABLE `interview_schedule`
  ADD CONSTRAINT `interview_schedule_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `registration` (`id`),
  ADD CONSTRAINT `interview_schedule_ibfk_2` FOREIGN KEY (`employer_id`) REFERENCES `e_registration` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
