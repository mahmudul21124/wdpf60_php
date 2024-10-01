-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 09:27 PM
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
(1, 'Mahmudul Haque', 'admin.png', 'admin@gmail.com', 'admin', '2024-10-01 18:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` varchar(32) NOT NULL,
  `class` varchar(50) NOT NULL,
  `status` enum('Present','Absent') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `roll_no`, `class`, `status`, `date`) VALUES
(1, 'Kazi Iftekher ', 'ch-1001', 'Six', 'Present', '2024-08-08'),
(2, 'Kazi Iftekher ', 'ch-1001', 'Six', 'Present', '2024-08-08'),
(3, 'Mahmudul Haque', 'Ch-1001', 'Ten', 'Present', '2024-10-01'),
(4, 'Shohanur Rahman', 'Ch-1002', 'Ten', 'Absent', '2024-10-01');

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
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `massage` varchar(200) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `class`, `massage`, `creationDate`, `updationDate`) VALUES
(1, 'City Bus Service: For the first time in the city Heritage School is providing City Bus Service along with Micro Bus in a reasonable fare. ', 'Six', 'sdafadsfasd', '2024-10-01 17:13:41', NULL),
(2, 'The air conditioned Class Rooms of the School are well equipped with modern apparatus and standard size including proper light and noise protection.', 'Seven', 'asdfsadfa', '2024-10-01 17:14:44', NULL),
(3, 'Many Co-curricular activities take place outside the normal school day.', '', '', '2024-10-01 17:17:07', NULL),
(4, 'The school has separate computer lab with WIFI internet access for the students.', '', '', '2024-10-01 17:17:07', NULL),
(5, 'Pick and Drop facilities is available for the students to the different area like ..', '', '', '2024-10-01 17:17:07', NULL),
(6, 'Drama, music, art, dance, cooking, computers, special interest groups, social events and sports, science fair, fun trip, study tour.', '', '', '2024-10-01 17:17:07', NULL),
(7, 'Class rooms are visible from the lobby so that section in charge can monitor', '', '', '2024-10-01 17:17:07', NULL),
(8, 'ELTS and Cambridge University Young Learners’ tests, and teaching for the British Council for the whole country.', '', '', '2024-10-01 17:17:07', NULL),
(9, 'Heritage School in May, 2018, to find an educational institution which was dynamic, committed to quality, and always eager to improve.', '', '', '2024-10-01 17:21:39', NULL),
(10, 'At Heritage, we are starting a new system on classroom decoration. We are asking students of class 7 and up to choose their own colour schemes', '', '', '2024-10-01 17:21:39', NULL),
(11, 'There is a maximum of 32 students in an English version class and 30 in an English medium one and in Infants.', '', '', '2024-10-01 17:21:39', NULL),
(12, 'We want our students to take responsibility for their environment. So, teachers, the Principal, admin staff and students will decorate classes themselves.', '', '', '2024-10-01 17:21:39', NULL),
(13, 'he waiting room is totally isolated from the student’s area and separate entry point in the northern part of the building.', '', '', '2024-10-01 17:21:39', NULL),
(14, 'The World Cup always grips Bangladesh even though our national team never reaches the tournament.', '', '', '2024-10-01 17:21:39', NULL),
(15, 'Even our pet animals get extra-special professional care at Heritage!', '', '', '2024-10-01 17:21:39', NULL),
(16, 'Falgun is a very special day in the Bengali calendar. It reminds us of flowers.', '', '', '2024-10-01 17:21:39', NULL),
(17, 'There are bins in the playground for children to use instead of littering the space.', '', '', '2024-10-01 17:21:39', NULL),
(18, 'When it rains, there is an indoor games room for older children to play chess, carom and table tennis.\r\n\r\n', '', '', '2024-10-01 17:21:39', NULL);

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
(1, 'six-1001', 'Kazi Iftekher ', 'Kazi Iqbal', '', '', 'Six', 'Male', '2024-09-01', '01988761123', ' Sonarga, Narayanganj', 'iftekher@gmail.com', 'iftekher', '2024-10-01 19:18:43', NULL),
(2, 'B-1001', 'Jamil Hossain', 'Hossain', 'jamil.jpeg', 'Biology', 'Ten', 'Male', '2024-09-04', '4333343453', 'Madaripur', 'jamil@gmail.com', 'jamil', '2024-09-20 16:05:40', NULL),
(4, 'P-1001', 'Rummana', 'Hossain', 'rummana.jpeg', 'Physics', 'Nine', 'Female', '2024-09-03', '234523145213', 'ukyguguyggy', 'rummana@gmail.com', 'rummana', '2024-09-22 18:19:33', NULL),
(5, 'Ch-1001', 'Mahmudul Haque', 'Mahbubul Haque', 'syed_sir.jpeg', 'Chemistry', 'Ten', 'Male', '2024-04-10', '01988674940', 'Dhaka', 'rakib21124@gmail.com', 'rakib', '2024-10-01 19:19:57', NULL),
(6, 'Ch-1002', 'Shohanur Rahman', 'Hossain', 'moshaidul_sir.jpg', 'Chemistry', 'Ten', 'Male', '2024-04-12', '234523145213', 'Dhaka', 'rakib21124@gmail.com', 'rrr', '2024-10-01 19:21:06', NULL),
(7, 'Ch-1003', 'Abul Bashar', 'Hossain Ali', 'moshaidul_sir.jpg', 'Chemistry', 'Ten', 'Male', '2023-12-03', '0198867432864832', 'Dhaka', 'rakib21124@gmail.com', 'rrr', '2024-10-01 19:22:03', NULL),
(8, 'se-1001', 'Arnaf Ahmed', 'Zia', 'moshaidul_sir.jpg', '', 'Seven', 'Male', '2021-03-05', '01988674940', 'Dhaka', 'rakib21124@gmail.com', 'rrr', '2024-10-01 19:23:31', NULL),
(9, 'ei-1001', 'Nusrat Jahan Hafsa', 'Sofikul', 'rummana.jpeg', '', 'Eight', 'Female', '2024-01-24', '01988674940', 'Dhaka', 'rakib21124@gmail.com', 'rrr', '2024-10-01 19:24:44', NULL),
(10, 'ei-1001', 'Nusrat Jahan Hafsa', 'Sofikul', 'rummana.jpeg', '', 'Eight', 'Female', '2024-01-24', '01988674940', 'Dhaka', 'rakib21124@gmail.com', 'rrr', '2024-10-01 19:25:09', NULL);

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
(1, 'Saif Jahan', 'Bangla', 'unknown1.jpg', 'Puran Dhaka', '12345', '01988761123', 'saif@gmail.com', 'saif', '2024-09-22 12:47:32', NULL),
(2, 'Mohiuddin', 'English', 'mohiuddin.jpeg', 'English', '54326', '01234234233', 'mohiuddin@gmail.com', 'mohiuddin', '2024-09-22 16:32:26', NULL),
(5, 'Sadia', 'English', 'unknown2.jpg', 'sfsadfa', '56241', '4333343453', 'sadia@gmail.com', 'sadia', '2024-09-22 12:47:46', NULL),
(6, 'Syed Ziaul Habib', 'Biology', 'syed_sir.jpeg', 'Doyaganj', '76301', '01986735825', 'roobon@gmail.com', 'roobon', '2024-09-20 15:39:50', NULL),
(7, 'Moshaidul Islam ', 'Chemistry', 'moshaidul_sir.jpg', 'Agargao', '76301', '01876327863', 'moshaidul@gmail.com', 'moshaidul', '2024-09-20 15:42:19', NULL),
(8, 'Md Arif Hasan', 'Physics', 'arif.jpeg', 'Dhaka', '56241', '01988674940', 'arif@gmail.com', 'arif', '2024-10-01 19:10:21', NULL),
(9, 'Mustafizur rahman', 'Management ', 'abir.jpeg', 'Dhaka', '76301', '01988674940', 'mustafiz@gmail.com', 'mustafiz', '2024-10-01 19:11:15', NULL),
(10, 'Nazmus', 'Math', 'joys.jpeg', 'dhaka', '56241', '01988674940', 'nazmus@gmail.com', 'nazmus', '2024-10-01 19:12:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
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
-- Indexes for table `notice`
--
ALTER TABLE `notice`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
