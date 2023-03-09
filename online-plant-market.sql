-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 05:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-plant-market`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_checked` int(11) NOT NULL DEFAULT 1,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_photo` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Air Purifying Plants'),
(2, 'Hanging Plants'),
(3, 'Office Plants'),
(4, 'Table Tops'),
(5, 'Herbs');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `category_id`, `description`, `photo`) VALUES
(1, 'Bambino', '599.00', 1, '', 'assets/air-purifying-plants/bambino.PNG'),
(2, 'Black Prince Rubber Tree', '999.00', 1, '', 'assets/air-purifying-plants/black-prince.PNG'),
(3, 'Cypress Tree', '899.00', 1, '', 'assets/air-purifying-plants/cypress-tree.PNG'),
(4, 'Fiddle Leaf Fig', '1999.00', 1, '', 'assets/air-purifying-plants/fiddle-leaf.PNG'),
(5, 'Licuala Grandis', '1199.00', 1, '', 'assets/air-purifying-plants/licuala-grandis.PNG'),
(6, 'Palm Tree', '299.00', 1, '', 'assets/air-purifying-plants/palm-tree.PNG'),
(7, 'Robusta', '299.00', 1, '', 'assets/air-purifying-plants/robusta.PNG'),
(8, 'Rubber Tree', '1999.00', 1, '', 'assets/air-purifying-plants/rubber-tree.PNG'),
(9, 'Snake Plant', '299.00', 1, '', 'assets/air-purifying-plants/snake-plant.PNG'),
(10, 'Tineke Rubber Tree', '999.00', 1, '', 'assets/air-purifying-plants/tineke-rubber-tree.PNG'),
(11, 'Anthuriumn Hookeri', '699.00', 2, '', 'assets/hanging-plants/1.PNG'),
(12, 'Black Prince Rubber Tree', '999.00', 2, '', 'assets/hanging-plants/2.PNG'),
(13, 'Cobra Fern', '999.00', 2, '', 'assets/hanging-plants/3.PNG'),
(14, 'Cypress Tree', '899.00', 2, '', 'assets/hanging-plants/4.PNG'),
(15, 'Golden Selfoum', '999.00', 2, '', 'assets/hanging-plants/5.PNG'),
(16, 'Monstera Deliciosa', '1599.00', 2, '', 'assets/hanging-plants/6.PNG'),
(17, 'Tineke Rubber Tree', '599.00', 2, '', 'assets/hanging-plants/7.PNG'),
(18, 'Variegated Money Tree', '999.00', 2, '', 'assets/hanging-plants/8.PNG'),
(19, 'Multistalk Fortune Plant', '499.00', 2, '', 'assets/hanging-plants/9.PNG'),
(20, 'Palm Tree', '299.00', 2, '', 'assets/hanging-plants/10.PNG'),
(21, 'Anthuriumn Hookeri', '699.00', 3, '', 'assets/office-plants/1.PNG'),
(22, 'Bambino', '999.00', 3, '', 'assets/office-plants/2.PNG'),
(23, 'Black Prince Rubber Tree', '999.00', 3, '', 'assets/office-plants/3.PNG'),
(24, 'Cactus', '899.00', 3, '', 'assets/office-plants/4.PNG'),
(25, 'Dieffenbachia Oerstedi', '999.00', 3, '', 'assets/office-plants/5.PNG'),
(26, 'Licuala Grandis', '1599.00', 3, '', 'assets/office-plants/6.PNG'),
(27, 'Mostera Decliosa', '599.00', 3, '', 'assets/office-plants/7.PNG'),
(28, 'Philodendron Black Cardinal', '999.00', 3, '', 'assets/office-plants/8.PNG'),
(29, 'Philodendron Burle Marx', '499.00-999.00', 3, '', 'assets/office-plants/9.PNG'),
(30, 'Philodendron Prince of Orange', '299.00-1799.00', 3, '', 'assets/office-plants/10.PNG'),
(31, 'Alocasia Bambino', '699.00', 4, '', 'assets/table-tops/1.PNG'),
(32, 'Aloe Vera', '999.00', 4, '', 'assets/table-tops/2.PNG'),
(33, 'Anthurium Laceleaf', '999.00', 4, '', 'assets/table-tops/3.PNG'),
(34, 'Boston Fern', '899.00', 4, '', 'assets/table-tops/4.PNG'),
(35, 'Cactus', '999.00', 4, '', 'assets/office-plants/5.PNG'),
(36, 'Cobra Fern', '1599.00', 4, '', 'assets/table-tops/6.PNG'),
(37, 'Crptanthus', '599.00', 4, '', 'assets/table-tops/7.PNG'),
(38, 'Dieffenbachia Oerstedi', '999.00', 4, '', 'assets/table-tops/8.PNG'),
(39, 'Dwarf Croton San Francisco', '499.00-999.00', 4, '', 'assets/table-tops/9.PNG'),
(40, 'Green Fittonia', '299.00-1799.00', 4, '', 'assets/table-tops/10.PNG'),
(41, 'Chocolate Mint', '699.00', 5, '', 'assets/herbs/1.PNG'),
(42, 'Citronella', '999.00', 5, '', 'assets/herbs/2.PNG'),
(43, 'Citronella Malvarosa', '999.00', 5, '', 'assets/herbs/3.PNG'),
(44, 'Dill', '899.00', 5, '', 'assets/herbs/4.PNG'),
(45, 'Cactus', '999.00', 5, '', 'assets/herbs/5.PNG'),
(46, 'Gotu Kola', '1599.00', 5, '', 'assets/herbs/6.PNG'),
(47, 'Green Tea', '599.00', 5, '', 'assets/herbs/7.PNG'),
(48, 'Lavender', '999.00', 5, '', 'assets/herbs/8.PNG'),
(49, 'Lemon Balm', '499.00-999.00', 5, '', 'assets/herbs/9.PNG'),
(50, 'Lemon Mint', '299.00-1799.00', 5, '', 'assets/herbs/10.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_verified` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
