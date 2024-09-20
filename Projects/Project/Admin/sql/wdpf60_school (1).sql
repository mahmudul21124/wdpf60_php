-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 09:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `photo`, `email`, `password`, `updationDate`) VALUES
(1, 'Admin', 'admin.jpg', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2024-09-20 19:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `creationDate`, `updationDate`) VALUES
(1, 'Six', '2024-09-14 18:22:57', NULL),
(2, 'Seven', '2024-09-14 18:22:57', NULL),
(3, 'Eight', '2024-09-14 18:22:57', NULL),
(4, 'Nine', '2024-09-14 18:22:57', NULL),
(5, 'Ten', '2024-09-14 18:22:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `creationDate`, `updationDate`) VALUES
(1, 'Chemistry', '2024-09-14 15:34:32', NULL),
(2, 'Physics', '2024-09-14 15:34:32', NULL),
(3, 'Math', '2024-09-14 15:34:32', NULL),
(4, 'Biology', '2024-09-14 15:34:32', NULL),
(5, 'English', '2024-09-14 15:34:32', NULL),
(6, 'Bangla', '2024-09-14 15:34:32', NULL),
(7, 'Management ', '2024-09-14 15:34:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `sector`, `creationDate`, `updationDate`) VALUES
(1, 'Peon', '2024-09-20 17:27:33', NULL),
(2, 'Purchase Officer', '2024-09-20 17:27:33', NULL),
(3, 'Receptionist', '2024-09-20 17:27:33', NULL),
(4, 'Clerk', '2024-09-20 17:27:33', NULL),
(5, 'Librarian', '2024-09-20 17:27:33', NULL),
(6, 'Driver', '2024-09-20 17:27:33', NULL),
(7, 'Lab Assistent', '2024-09-20 17:27:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `sector`, `photo`, `contact_no`, `shift`, `email`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Hasnat', 'Peon', '451515043_901301945350883_6993688805200481223_n.jp', '01987412321', 'Morning', 'hasnat@gmail.com', 'hasnat', '2024-09-20 17:45:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parents_name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `dob` date DEFAULT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `name`, `parents_name`, `photo`, `department`, `class`, `gender`, `dob`, `contact_no`, `address`, `email`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'ch-1001', 'Kazi Iftekher ', 'Kazi Iqbal', '', 'Chemistry', 'Six', 'Male', '2024-09-01', '01988761123', 'Sonarga, Narayanganj', 'iftekher@gmail.com', '5321121179b9c8f51b6514fe2f856989', '2024-09-14 19:21:21', NULL),
(2, 'B-1001', 'Jamil Hossain', 'Hossain', 'jamil.jpeg', 'Biology', 'Ten', 'Male', '2024-09-04', '4333343453', 'Madaripur', 'jamil@gmail.com', 'jamil', '2024-09-20 16:05:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `fees` decimal(10,0) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `department`, `photo`, `address`, `fees`, `contact_no`, `email`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Saif Jahan', 'Bangla', 'unknown1.jpg', 'Puran Dhaka', '12345', '01988761123', 'saif@gmail.com', '44c099ff522cd529ade21a9c7aa54ebf', '2024-09-20 15:30:45', NULL),
(2, 'Mohiuddin', 'Management', 'mohiuddin.jpeg', 'English', '54326', '01234234233', 'mohiuddin@gmail.com', '3f3c29591fe4d68cd9161c974313249e', '2024-09-20 15:31:33', NULL),
(3, 'Mahmudul Hasan', 'Math', 'mahmudul.jpeg', 'Dhaka', '56241', '0198867432864832', 'mahmud@gmail.com', 'mahmud', '2024-09-20 15:32:16', NULL),
(4, 'Nusrat Jahan Hafsa', 'English', 'nusrat.jpeg', 'Demra', '56241', '234523145213', 'hafsa@gmail.com', '123', '2024-09-20 15:33:56', NULL),
(5, 'Sadia', 'English', 'unknown2.jpg', 'sfsadfa', '56241', '4333343453', 'sadia@gmail.com', '123', '2024-09-20 15:34:09', NULL),
(6, 'Syed Ziaul Habib', 'Biology', 'syed_sir.jpeg', 'Doyaganj', '76301', '01986735825', 'roobon@gmail.com', 'roobon', '2024-09-20 15:39:50', NULL),
(7, 'Moshaidul Islam ', 'Chemistry', 'moshaidul_sir.jpg', 'Agargao', '76301', '01876327863', 'moshaidul@gmail.com', 'moshaidul', '2024-09-20 15:42:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
