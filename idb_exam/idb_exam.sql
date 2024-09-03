-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 08:54 AM
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
-- Database: `idb_exam`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `manufacturer_add` (IN `name` VARCHAR(50), IN `address` VARCHAR(100), IN `contact` VARCHAR(50))   INSERT INTO manufacturer (id, name, address, contact_no) VALUES (NULL, name, address, contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Sony', 'Dhaka', '234233412'),
(2, 'Samsung', 'Khulna', '21341234123'),
(3, 'Walton', 'Barisal', '1234512412'),
(4, 'HP', 'Mugda', '12345231423412'),
(5, 'MSI', 'Joshor', '21342323423'),
(6, 'Asus', 'Cumilla', '1235423145213');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `delete_manufacturer` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE product.manufacturer_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `price_above_5000`
-- (See below for the actual view)
--
CREATE TABLE `price_above_5000` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Walton Camera 50 MP', 14500, 3),
(2, 'MSI 6GB Graphics Card twin fan', 35000, 5),
(3, 'Asus Motherboard', 3500, 6),
(4, 'Sony Button phone ', 3900, 1),
(5, 'HP Printer', 5900, 4),
(6, 'Samsung AC 1.5 TON', 68000, 2),
(7, 'Asus Ram 8 GB DDR4', 4990, 6),
(8, 'Samsung A73 5G Smartphone', 45000, 2);

-- --------------------------------------------------------

--
-- Structure for view `price_above_5000`
--
DROP TABLE IF EXISTS `price_above_5000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `price_above_5000`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
