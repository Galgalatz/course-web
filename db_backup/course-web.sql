-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 07:59 PM
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
-- Database: `course-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `to_email` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `city`, `date`, `to_email`, `updated_at`, `created_at`) VALUES
(4, 'גמילה מעישון', 'כפר סבא', '21.5.19', 'gmila@gmail.com', '2019-05-31 16:46:37', '2019-06-01 20:14:29'),
(6, 'סדנה לשינה', 'כפר סבא', '22.6.19', 'kfas@org.co.il', '2019-05-31 17:35:49', '2019-06-01 20:14:29'),
(9, 'סתם סדנה', 'רמת גן', '6.7.19', 'stam@org.co.il', '2019-05-31 17:36:37', '2019-06-01 20:14:29'),
(14, 'סדנת אפייה', 'רחובות', '5.9.18', 'afii@gmail.org.il', '2019-06-01 16:01:11', '2019-06-01 20:14:29'),
(15, 'עוד סדנה', 'יפו', '13.6.19', 'od@org.co.il', '2019-06-01 16:02:03', '2019-06-01 20:14:29'),
(17, 'סדנה סדנה סדנה', 'רחובות', '5.6.19', 'sadna@org.il', '2019-06-01 16:02:43', '2019-06-01 20:14:29'),
(19, 'סדנה למתכנתים עייפים', 'הברזל 7 תל אביב', '3 מפגשים: 21.6 25.5 28.7', 'gal@gmail.com', '2019-06-01 17:16:10', '2019-06-01 17:16:10'),
(21, 'סדנה לעייפות', 'החושלים 8 יפו', '21.6.19', 'gal2@ooo.co.il', '2019-06-01 17:17:39', '2019-06-01 17:17:39'),
(22, 'גמילה מקוד', 'פתח תקווה', '21.8.19', 'gmila@gmail.com', '2019-06-01 17:57:16', '2019-06-01 17:47:50'),
(23, 'סדנת עדכון', 'רחובות', '5.9.18', 'afii@gmail.org.il', '2019-06-01 17:49:36', '2019-06-01 17:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `curren_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
