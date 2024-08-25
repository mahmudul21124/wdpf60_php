-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 09:18 AM
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
-- Database: `wdpf60`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user` (IN `em` VARCHAR(50), IN `pass` CHAR(32), IN `full` VARCHAR(100))   INSERT INTO users (id, email, password, fullname) VALUES (NULL, em, pass, full)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user1` (IN `em` VARCHAR(50), IN `pass` CHAR(32), IN `full` VARCHAR(100))   INSERT INTO users (id, email, password, fullname) VALUES (NULL, em, pass, full)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory` (OUT `inv` INT)   SELECT 45 INTO inv$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` smallint(6) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Winter Clothes'),
(4, 'Electronic Parts'),
(5, 'Winter Sell'),
(6, 'Abdullah Vai');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Product_details` varchar(400) NOT NULL,
  `Product_price` decimal(10,0) NOT NULL,
  `Product_quantity` smallint(6) NOT NULL,
  `Product_category` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Product_name`, `Product_details`, `Product_price`, `Product_quantity`, `Product_category`) VALUES
(1, 'Book', 'Comfortable', '100', 5, 1),
(2, 'Pencil', 'Nice', '5', 10, 2),
(3, 'Computer', 'Awesome', '50000', 10, 2),
(7, 'Mouse', 'Wireless', '1500', 20, 6),
(21, 'Web Cam', 'Wired', '4500', 30, 1),
(22, 'Microphone', 'Wired', '1250', 35, 4),
(23, 'Mouse Pad', 'Ilastic', '456', 65, 1),
(24, '', '', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`) VALUES
(1, 'saif@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Saif Jahan Dewana'),
(2, 'rakib@gmail.com', 'abc123', 'Abdur Rakib'),
(3, 'rummana@gmail.com', 'abc123', 'Rummana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
