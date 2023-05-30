-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 07:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(2, 'Women', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(3, 'Kids', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(4, 'Other', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 4, 4, '2023-03-10 14:38:26', 'Asus 11.6 Celeron Notebook with Touchscreen', 'Asus 11.6 Celeron Notebook with Touchscreen (Grey)1.jpg', 'Asus 11.6 Celeron Notebook with Touchscreen (Grey)2.jpg', 'Asus 11.6 Celeron Notebook with Touchscreen (Grey)5.jpg', 8999, 'Notebook', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam saepe ipsum soluta aut ipsa odit accusantium quis. Impedit cum illo minus rerum aut ad.'),
(2, 4, 4, '2023-03-10 14:38:51', 'JBL Tune 510 BT Wireless On-Ear Headphones', 'JBL Tune 510 BT Wireless On-Ear Headphones (Black)3.jpg', 'JBL Tune 510 BT Wireless On-Ear Headphones (Black)4.jpg', 'JBL Tune 510 BT Wireless On-Ear Headphones (Black)5.jpg', 950, 'Wireless On-Ear Headphones', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.'),
(3, 5, 4, '2023-03-19 17:19:30', 'ACDC Tool Kit (48 Piece) With Carry Case', 'ACDC Tool Kit (48 Piece).jpg', 'no-image.png', 'no-image.png', 450, 'Tool Kit', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.'),
(4, 4, 4, '2023-03-19 17:19:18', 'Canon EOS 2000D Digital SLR Camera', 'Canon EOS 2000D Digital SLR Camera Starter Kit (24MP).jpg', 'no-image.png', 'no-image.png', 7499, 'Digital Camera', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.'),
(5, 6, 4, '2023-03-10 14:40:15', 'Bosch Comfortline Cordless Kettle', 'Bosch Comfortline Cordless Kettle (Stainless Steel)1.jpg', 'Bosch Comfortline Cordless Kettle (Stainless Steel)2.jpg', 'Bosch Comfortline Cordless Kettle (Stainless Steel)3.jpg', 999, 'Cordless Kettle', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(6, 3, 1, '2023-03-19 17:19:06', 'Cape Town International Jazz Festival Jazz Hoodie', 'Cape Town International Jazz Festival Jazz Hoodie (Grey Melange)1.jpg', 'no-image.png', 'no-image.png', 559, 'Hoodie', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(8, 4, 4, '2023-03-19 17:18:53', 'Garmin Instinct Outdoor GPS Smart Watch', 'Garmin Instinct Outdoor GPS Smart Watch (Lakeside Blue).jpg', 'no-image.png', 'no-image.png', 4999, 'Garmin Instinct Outdoor GPS Smart Watch', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(10, 2, 4, '2023-03-19 17:18:19', 'Red Winter (Paperback)- Marc Cameron', 'Red Winter (Paperback)- Marc Cameron.jpg', 'no-image.png', 'no-image.png', 375, 'Red Winter (Paperback)- Marc Cameron', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(11, 8, 3, '2023-03-18 09:04:09', 'LEGO Star Wars R2-D2 (2314 Pieces)', 'LEGO Star Wars R2-D2 (2314 Pieces)1.jpg', 'LEGO Star Wars R2-D2 (2314 Pieces)2.jpg', 'LEGO Star Wars R2-D2 (2314 Pieces)3.jpg', 3700, 'Lego', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(12, 8, 3, '2023-03-16 17:59:43', 'Monopoly Classic (Hasbro)', 'Monopoly Classic1.jpg', 'Monopoly Classic2.jpg', 'Monopoly Classic3.jpg', 658, 'Hasbro', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>'),
(13, 8, 3, '2023-03-11 07:08:53', 'Club Petz Interactive Pet - Billy The Little Shark', 'Club Petz Interactive Pet - Billy The Little Shark1.jpg', 'Club Petz Interactive Pet - Billy The Little Shark2.jpg', 'Club Petz Interactive Pet - Billy The Little Shark3.jpg', 599, 'Club Petz', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam non expedita magni commodi temporibus deserunt at itaque labore suscipit accusamus? Laudantium veritatis vero reiciendis.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `products_featured`
--

CREATE TABLE `products_featured` (
  `product_id` int(100) NOT NULL,
  `p_cat_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_featured`
--

INSERT INTO `products_featured` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 5, 4, '2023-03-19 17:19:50', 'Ryobi Handyline 10nmm 18V Li-ion Cordless Drill', 'Ryobi Handyline 10nmm 18V Li-ion Cordless Drill.jpg', 'no-image.png', 'no-image.png', 899, 'Ryobi Handyline 10nmm 18V Li-ion Cordless Drill', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam saepe ipsum soluta aut ipsa odit accusantium quis. Impedit cum illo minus rerum aut ad.'),
(2, 1, 4, '2023-03-19 17:20:03', 'Elizabeth Taylor Diamonds & Sapphires', 'Elizabeth Taylor Diamonds & Sapphires Eau De Toilette (100ml).jpg', 'no-image.png', 'no-image.png', 1090, 'Elizabeth Taylor Diamonds & Sapphires Perfume', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam saepe ipsum soluta aut ipsa odit accusantium quis. Impedit cum illo minus rerum aut ad.'),
(3, 6, 4, '2023-03-19 17:20:14', 'Mellerware Planet Non-Stick Sandwich Maker', 'Mellerware Planet Non-Stick Sandwich Maker (800W)(Black).jpg', 'Mellerware Planet Non-Stick Sandwich Maker (800W)(Black)2.jpg', 'no-image.png', 450, 'Non-Stick Sandwich Maker', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam saepe ipsum soluta aut ipsa odit accusantium quis. Impedit cum illo minus rerum aut ad.'),
(4, 6, 4, '2023-03-19 17:31:04', 'Bennett Read Steam Iron (2200W)', 'Bennett Read Steam Iron (2200W)1.jpg', 'Bennett Read Steam Iron (2200W)2.jpg', 'no-image.png', 475, 'Bennett Read Steam Iron', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita magnam saepe ipsum soluta aut ipsa odit accusantium quis. Impedit cum illo minus rerum aut ad.');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`id`, `product_name`, `product_price`, `product_image`, `product_desc`) VALUES
(1, 'ACDC Tool Kit (48 Piece)', 450, './images/product-img/ACDC Tool Kit (48 Piece).jpg', 'Lorem ipsum dolor sit amet.'),
(2, 'Asus 11.6 Celeron Notebook with Touchscreen', 8999, './images/product-img/Asus 11.6 Celeron Notebook with Touchscreen (Grey)1.jpg', 'Lorem ipsum dolor sit amet.'),
(3, 'Canon EOS 2000D Digital SLR Camera Starter Kit', 7999, './images/product-img/Canon EOS 2000D Digital SLR Camera Starter Kit (24MP).jpg', 'Lorem ipsum dolor sit amet.'),
(4, 'Garmin Instinct Outdoor GPS Smart Watch (Lakeside Blue)', 5999, './images/product-img/Garmin Instinct Outdoor GPS Smart Watch (Lakeside Blue).jpg', 'Lorem ipsum dolor sit amet.'),
(5, 'Atlas - The Story Of Pa Salt (Paperback)', 250, './images/product-img/Atlas - The Story Of Pa Salt (Paperback).jpg', 'Lorem ipsum dolor sit amet.'),
(6, 'Elizabeth Taylor Diamonds & Sapphires (100ml)', 1090, './images/product-img/Elizabeth Taylor Diamonds & Sapphires Eau De Toilette (100ml).jpg', 'Lorem ipsum dolor sit amet.'),
(7, 'Bosch Comfortline Cordless Kettle (Stainless Steel)', 750, './images/product-img/Bosch Comfortline Cordless Kettle (Stainless Steel)1.jpg', 'Lorem ipsum dolor sit amet.');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Accessories', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(2, 'Books', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(3, 'Clothing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(4, 'Computers & Electronics', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(5, 'DIY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(6, 'Home & Appliances', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(7, 'Shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.'),
(8, 'Toys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sit quidem, quibusdam asperiores itaque obcaecati maxime incidunt voluptatum, ut eum, in possimus inventore recusandae minima.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', 'hero-banner-img1.jpg'),
(2, 'Slide number 2', 'hero-banner-img2.jpg'),
(3, 'Slide number 3', 'hero-banner-img3.jpg'),
(4, 'Slide number 4', 'hero-banner-img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'Test1', '$2y$10$UbLwSflWDPtt2Xf1Q1Ffje43nyLtZ.5xEx6.AVlUDMXg/x00RmmuS', 'test@email.com'),
(2, 'Test2', '$2y$10$PB0eMGBg8/uI3flx19/SBehMNLE.j9BgcwmuCzw5677gXl2QQ8Nl6', 'test2@email.com'),
(3, 'Test3', '$2y$10$QZvtIBtGAnhs8rLiBp.5fudcBKAPzr5i.uB.w0wi1U6NhqVUEbgdG', 'test3@email.com'),
(4, 'Test4', '$2y$10$JD89tzZTSCElzK1dSHCUaOCdn6utG7as/sAu8grAt/Ar2/DJmGdIC', 'test4@email.com'),
(5, 'Test5', '$2y$10$32SeW9PWELKUkeCi/CPDPODFTG5jCqierybcJl8A1iPoVCSZfmfOK', 'test5@email.com'),
(6, 'Test6', '$2y$10$QCcOKJ6OMDbI.EqEHIp5auQLIGZNH6pcbGHL..dn2YDms02Ufsu6e', 'test6@email.com'),
(7, 'Test7', '$2y$10$FwcbLDtUm.nklk/aiRerDuusrSzBbeHpFIUnAzmyo6O9mBlopT9xu', 'test7@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_featured`
--
ALTER TABLE `products_featured`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products_featured`
--
ALTER TABLE `products_featured`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
