-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 10:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbook_entries`
--

CREATE TABLE `logbook_entries` (
  `id` int(11) NOT NULL,
  `entry_date` date DEFAULT curdate(),
  `entry_time` varchar(20) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `activity_description` text DEFAULT NULL,
  `working_hour` varchar(30) DEFAULT NULL,
  `created_at` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logbook_entries`
--

INSERT INTO `logbook_entries` (`id`, `entry_date`, `entry_time`, `days`, `week`, `activity_description`, `working_hour`, `created_at`) VALUES
(3, '2024-05-30', '10:00pm', 345, 3456, 'simple description', '234', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'name1', 'name1@gmail.com', '$2y$10$pNN5o1V092FckgMpsj1qDOWDh.4LWXCKxaIELpyHlvgwODpbh8OHS', '2024-05-30'),
(2, 'name2', 'name2@gmail.com', '$2y$10$WKo1ISs5Ox4ddk1ktZZkSudc3KIYaZ9lO9TmnFiIAHEXgrkZYYhOm', '2024-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook_entries`
--
ALTER TABLE `logbook_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
