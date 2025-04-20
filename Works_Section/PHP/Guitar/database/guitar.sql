-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 09:10 AM
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
-- Database: `guitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `date_add` date NOT NULL DEFAULT current_timestamp(),
  `date_checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `ID` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `customer_first_name` varchar(30) NOT NULL,
  `customer_last_name` varchar(30) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `verification_code` int(11) NOT NULL,
  `customer_contact` double NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_age` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id` int(11) NOT NULL,
  `order_id` int(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_address` varchar(200) NOT NULL,
  `total_bill` double NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `delivery_day` date NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `product_type` varchar(11) NOT NULL DEFAULT 'Module',
  `product_status` varchar(20) NOT NULL DEFAULT 'Available',
  `product_sale` int(10) NOT NULL DEFAULT 0,
  `owner` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_tbl`
--

CREATE TABLE `seller_tbl` (
  `ID` int(11) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `seller_first_name` varchar(30) NOT NULL,
  `seller_last_name` varchar(30) NOT NULL,
  `seller_email` varchar(60) NOT NULL,
  `verification_code` int(11) NOT NULL,
  `seller_contact` double NOT NULL,
  `seller_username` varchar(30) NOT NULL,
  `seller_password` varchar(100) NOT NULL,
  `seller_status` varchar(20) NOT NULL DEFAULT 'Pending',
  `seller_rating` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_tbl`
--

INSERT INTO `seller_tbl` (`ID`, `seller_id`, `shop_name`, `seller_first_name`, `seller_last_name`, `seller_email`, `verification_code`, `seller_contact`, `seller_username`, `seller_password`, `seller_status`, `seller_rating`) VALUES
(4, '0', '', 'admin', 'istration', '', 0, 0, 'admin', '$2y$10$1AqdvfhYh8GrfTOgNsTaheWqkmW33817rg4vSo0KaudjmbGlfU9Da', 'Pending', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `C` (`product_id`),
  ADD KEY `G` (`customer_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CustomerID` (`customers_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id`,`order_id`),
  ADD KEY `A` (`product_id`),
  ADD KEY `R` (`customer_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller_tbl`
--
ALTER TABLE `seller_tbl`
  ADD PRIMARY KEY (`ID`,`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `seller_tbl`
--
ALTER TABLE `seller_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD CONSTRAINT `C` FOREIGN KEY (`product_id`) REFERENCES `products_tbl` (`product_id`),
  ADD CONSTRAINT `G` FOREIGN KEY (`customer_id`) REFERENCES `customer_tbl` (`customers_id`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `A` FOREIGN KEY (`product_id`) REFERENCES `products_tbl` (`product_id`),
  ADD CONSTRAINT `R` FOREIGN KEY (`customer_id`) REFERENCES `customer_tbl` (`customers_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
