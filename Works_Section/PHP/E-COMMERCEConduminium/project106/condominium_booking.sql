-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 04:25 AM
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
-- Database: `condominium_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` text NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `date`, `time`, `message`, `created at`) VALUES
(1, '0', '0', '09091466155', '2025-04-11', '14:01:00', 'ddf', '2025-05-20 04:02:34'),
(2, 'rea', 'riego@gmail.com', '09091466155', '2025-04-11', '14:01:00', 'ddf', '2025-05-20 04:04:08'),
(3, 'rea', 'riego@gmail.com', '09091466155', '2025-05-20', '14:12:00', 'sdfdv', '2025-05-20 04:10:43'),
(4, 'rea', 'riego@gmail.com', '09091466155', '2025-05-21', '12:15:00', 'hfhb', '2025-05-20 04:13:32'),
(5, 'rea', 'riego@gmail.com', '09091466155', '2025-05-22', '12:15:00', 'hfhb', '2025-05-20 04:20:13'),
(6, 'rea', 'riego@gmail.com', '09091466155', '2025-05-22', '12:15:00', 'hfhb', '2025-05-20 04:56:21'),
(7, 'rea', 'riego@gmail.com', '09091466155', '2025-05-16', '01:16:00', 'bfc', '2025-05-20 05:14:24'),
(8, 'rea', 'riego@gmail.com', '09091466155', '2025-05-16', '13:20:00', 'ccbbdfh', '2025-05-20 05:17:44'),
(9, 'rea', 'riego@gmail.com', '09091466155', '2025-05-21', '13:27:00', 'sagdfdhfhfd', '2025-05-20 05:24:17'),
(10, 'rea', 'riego@gmail.com', '09091466155', '2025-05-21', '13:27:00', 'sagdfdhfhfd', '2025-05-20 05:26:09'),
(11, 'rea', 'riego@gmail.com', '09091466155', '2025-05-21', '13:27:00', 'sagdfdhfhfdfbfbf', '2025-05-20 05:28:20'),
(12, 'RHEA MAIDFS', 'pacificadorrheamae@gmail.com', '09123456789', '2025-05-21', '15:43:00', 'zdgdcvvddg', '2025-05-20 05:40:19'),
(13, 'rea', 'riego@gmail.com', '09091466155', '2025-05-24', '13:57:00', 'fgbsdgdfdgfd', '2025-05-20 05:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
