-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 09:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unione`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `community_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `community_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `connection_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `course_video` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `id_user`, `title`, `category`, `description`, `status`, `photo`, `course_video`, `created_at`, `updated_at`) VALUES
(1, 14, 'Mastering Web Development  haha', 'Technology', 'Learn full-stack web development including HTML, CSS, JavaScript, and PHP.', 'active', 'web_development.jpg', NULL, '2024-12-30 02:09:57', '2024-12-30 02:09:57'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-30 03:24:04', '2024-12-30 03:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `job_create` datetime DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id_profile` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `education` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customers','admin','trainers','recruiters') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'test1@unione.com', 'test1', '$2y$10$sV/NTwPlktNbblqYpsIiEuLzEBF1twhoP35sVAPSjoKXVIkS63ZBK', 'customers', '2024-12-29 17:25:54'),
(3, 'customer1@unione.com', 'Customer1', '$2y$10$5Yrb.ieGdRZ7yqQpVoTZc.ChyMmPVbiHwepRMmk3j7l.nGxjA2CO6', '', '2024-12-29 17:42:26'),
(4, 'customer2@unione.com', 'Customer2', '$2y$10$F4R6QhfSCAnxM9/JVTvl5eQ86x9rTk9mTBbTK3PYtP1d6Qikh1PH6', '', '2024-12-29 17:43:16'),
(6, 'customer3@unione.com', 'test2', '$2y$10$WM4iPOFm5clG70caCDuwROpEGnI7ujcQzWTItwnztAaKITE.TkDoe', '', '2024-12-29 17:51:22'),
(7, 'recruiter1@unione.com', 'test3', '$2y$10$7ozTDouSOSRQr7xkfpxUjutdxMY1R.2qyrxggZXNgIyIviHjh4nm2', '', '2024-12-29 18:17:42'),
(8, 'recruiter2@test.com', 'recruiter2', '$2y$10$/m3gK3O4X7bbHV48NLRnve5aPDoYbVdIwWAOFYebJmzIUti6dnTy.', '', '2024-12-29 18:21:33'),
(9, 'test3@unione.com', 'test5', '$2y$10$8DLhoDZgfFENRzMd98TWHO4Nk8ty8KlMZccGZdeCQMDuBRZBhvwRK', '', '2024-12-29 18:26:06'),
(10, 'haha@gmail.com', 'haha', '$2y$10$H4gXsUkPvlhC.MW7A7vzye18i4Jo2fTp9IYK5RfUSA1FZ0ncsbcfW', 'recruiters', '2024-12-29 18:36:36'),
(11, 'hehe@gmail.com', 'hehe', '$2y$10$NizNUab5iTIktUPI8NAki.dqDV70tf8ljNe44P6FK2vXJZ47VDwmy', '', '2024-12-29 18:38:55'),
(12, 'hoho@gmail.com', 'hoho', '$2y$10$DZJfV8SiOjp33AMoEl31peeeVrIE86LZ9aJ0RVTMIMYAwJKC2kyXS', 'recruiters', '2024-12-29 18:53:25'),
(13, 'hoho1@gmail.com', 'hahahhahahha', '$2y$10$oY3GpiyYQOFadIhiNtF9jeD/7JMCLUvvB5hbrqa6dXyqsnXTKCee2', 'trainers', '2024-12-29 18:53:51'),
(14, 'test1@gmail.com', 'budi', '$2y$10$BvX5maX7XxKmIC7sOxj/QeuG.TKkziyjqBc5lqnSw9YKy1z/VQHm.', 'trainers', '2024-12-29 18:54:59'),
(15, 'eben@gmail.com', 'eben', '$2y$10$sF5dc4VHZpUJdes6MPRcBuhGFen.Mmpfjb6pI6VZNMrJLD4vWgpom', 'customers', '2024-12-29 19:41:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`community_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `connection_id` (`connection_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community`
--
ALTER TABLE `community`
  ADD CONSTRAINT `community_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
  ADD CONSTRAINT `connections_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `connections_ibfk_2` FOREIGN KEY (`connection_id`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
