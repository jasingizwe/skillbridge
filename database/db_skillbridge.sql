-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 06:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skillbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `short_title`, `image_url`, `category`, `duration`, `createdAt`, `updatedAt`) VALUES
(1, 'Learn Figma from scratch', 'Figma from scratch', 'images/courses/course-1.jpeg', 'design', 45, '2024-11-27 03:50:23', '2024-11-27 03:55:41'),
(2, 'Learn Adobe : A comprehensive guide', 'Adobe comprehensive guide', 'images/courses/Adobe.png', 'Design', 45, '2024-11-27 03:51:13', '2024-11-27 03:55:58'),
(3, 'Learn Java: learn fundamental java basics', 'Java fundamentals', 'images/courses/course-2.jpeg', 'Development', 120, '2024-11-27 03:52:07', '2024-11-27 03:56:08'),
(4, 'Learn Python :Learn the basics of python for data science', 'Python basics for data science', 'images/courses/python.jpeg', 'Development', 120, '2024-11-27 03:53:08', '2024-11-27 03:56:18'),
(5, 'Learn Photography : Master the fundamentals of photography', 'Master fundamentals of photography', 'images/courses/photography.jpeg', 'Photography', 45, '2024-11-27 03:53:51', '2024-11-27 03:56:32'),
(6, 'Learn Videography : Basics of Videography', 'Basics of videography', 'images/courses/photoshot.jpg', 'Photography', 65, '2024-11-27 03:54:40', '2024-11-27 03:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `is_completed` int(11) DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrolled_courses`
--

INSERT INTO `enrolled_courses` (`id`, `student_id`, `course_id`, `is_completed`, `createdAt`, `updatedAt`) VALUES
(1, 4, 5, 1, '2024-11-27 04:23:42', '2024-11-27 04:23:42'),
(2, 4, 1, 1, '2024-11-27 04:24:56', '2024-11-27 04:24:56'),
(3, 4, 4, 1, '2024-11-27 04:58:35', '2024-11-27 05:00:23'),
(4, 4, 3, 1, '2024-11-27 04:59:01', '2024-11-27 05:00:26'),
(5, 0, 2, 0, '2024-11-27 05:03:51', '2024-11-27 05:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'student',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`, `role`, `status`, `createdAt`, `updatedAt`) VALUES
(5, 'Student', 'student@skillbridge.com', '33b57c197d2b8c8cdb28589b88a57af8588d82905b9027ff51cbd5901ae827f8', 'student', 'active', '2024-11-27 05:07:11', '2024-11-27 05:07:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
