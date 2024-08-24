-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 09:03 AM
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
-- Database: `evidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('Insert','Update','Delete') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(1, 'Sony Camera', 'Insert', '0000-00-00 00:00:00'),
(2, 'sony mobile', 'Insert', '2024-08-24 06:49:42'),
(3, 'sony mobile', 'Delete', '2024-08-24 06:58:52'),
(4, 'Sony Camera', 'Update', '2024-08-24 06:59:13');

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
(1, 'Sony', 'Dhaka', '012345678921'),
(3, 'Otobi', 'Cumilla', '01354246842'),
(4, 'Singer', 'Chittagonj', '01568745422'),
(5, 'Samsung', 'Feni', '01235467621'),
(6, 'HP', 'Gulshan', '01247842153'),
(7, 'Philips', 'Motijhil', '0124784521023');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `Manufacturer_Delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product
WHERE product.manufacturer_id = old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'Sony', 'Dhaka', '012345678921'),
(2, 'Walton', 'Narayanganj', '015741204634'),
(3, 'Otobi', 'Cumilla', '01354246842'),
(4, 'Singer', 'Chittagonj', '01568745422'),
(5, 'Samsung', 'Feni', '01235467621'),
(6, 'HP', 'Gulshan', '01247842153'),
(7, 'Philips', 'Motijhil', '0124784521023');

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
(1, 'Samsung 1.5 ton Air Conditioner', 60000, 5),
(2, 'Philips 22.8 inch Monitor', 4800, 7),
(4, 'Singer Refrigerator 350L ', 48000, 4),
(6, 'Otobi Malaysian board Chair', 3900, 3),
(7, 'Samsung 24 inch Curved Monitor', 26400, 5),
(8, 'HP Color Printer 3520 deskjet', 13600, 6),
(9, 'Sony Camera 30 MP', 14500, 1);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_delete` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES (
NULL, old.name, "Delete", NOW()
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES (
NULL, new.name, "Insert", NOW()
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_update` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES (
NULL, old.name, "Update", NOW()
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_above_5000`
-- (See below for the actual view)
--
CREATE TABLE `products_above_5000` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(1, 'Samsung 1.5 ton Air Conditioner', 60000, 5),
(2, 'Philips 22.8 inch Monitor', 4800, 7),
(3, 'Walton A35 5g Smartphone', 39400, 2),
(4, 'Singer Refrigerator 350L ', 48000, 4),
(5, 'Walton 43 inch Android TV', 39000, 2),
(6, 'Otobi Malaysian board Chair', 3900, 3),
(7, 'Samsung 24 inch Curved Monitor', 26400, 5),
(8, 'HP Color Printer 3520 deskjet', 13600, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`Product Name` varchar(50)
,`price` int(5)
,`Manufacturer Name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `products_above_5000`
--
DROP TABLE IF EXISTS `products_above_5000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_above_5000`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacturer_id` AS `manufacturer_id` FROM `product` WHERE `product`.`price` > 50005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `Product Name`, `product`.`price` AS `price`, `manufacturer`.`name` AS `Manufacturer Name` FROM (`manufacturer` join `product`) WHERE `manufacturer`.`id` = `product`.`manufacturer_id``manufacturer_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
