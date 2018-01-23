-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 02:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `slug`) VALUES
(8, NULL, 'Dokumen', 'dokumen'),
(9, 8, 'HVS A4 B/W', 'hvs-a4-bw'),
(10, 8, 'HVS A4 COLOR', 'hvs-a4-color'),
(11, NULL, 'Brosur/Flyer', 'brosurflyer'),
(12, 11, 'Art Paper', 'art-paper'),
(13, 11, 'Matt Paper', 'matt-paper');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE `coupon_code` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`id`, `code`, `amount`) VALUES
(1, 'CODE123', 500);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `product_id`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1512443368),
('m130524_201442_init', 1512443386),
('m141123_221351_shop', 1512443391);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `waktu` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `waktu`, `email`, `nama`, `nomor_HP`, `Account_No`, `User_FullName`, `PIN`, `Exp_Month`, `Exp_Year`, `Produk`, `banyak`, `file`, `total`, `coupun_code`, `notes`, `status`) VALUES
(21, 1516327484, 1516327484, '2018-01-19 02:04:44.681068', 'ifs15060@students.del.ac.id', 'Heri Wardana', 6282160437803, 123, 'HeriWAR', 123, 'January', 2018, 'Art Paper A3', 2, '@web/images/slider.png', 16000, 'A16x', 'Cepat ya bang', 'New'),
(22, 1516610734, 1516610734, '2018-01-22 08:45:34.076952', 'ifs15060@students.del.ac.id', 'Heri Wardana', 6282160437803, 123, 'HeriWAR', 123, 'January', 2018, 'Art Paper A3', 1, '@web/images/74bdefab9757a081606b181ac29f1db2.jpg', 10000, 'A0Tx', 'Cepat gan', 'New'),
(23, 1516612123, 1516612123, '2018-01-22 09:08:43.860351', 'ifs15060@students.del.ac.id', 'Heri Wardana', 6282160437803, 123, 'HeriWAR', 123, 'January', 2018, 'Art Paper A3', 1, '@web/images/s.png', 8365, 'A0Tx', 'lAma wak', 'New'),
(24, 1516615367, 1516615367, '2018-01-22 10:02:47.235863', 'ifs15060@students.del.ac.id', 'Heri Wardana', 6282160437803, 123, 'HeriWAR', 123, 'January', 2018, 'Art Paper A3', 2, '@web/images/74bdefab9757a081606b181ac29f1db2.jpg', 16000, 'A0Tx', 'Cetak diambil sore', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `title`, `price`, `product_id`, `quantity`) VALUES
(24, 21, 'Art Paper A3', '10000.0000', 10, 2),
(25, 22, 'HVS A4 Color High', '3000.0000', 9, 1),
(26, 22, 'Art Paper A3', '10000.0000', 10, 1),
(27, 23, 'HVS A4 B/W Low', '195.0000', 4, 7),
(28, 23, 'Art Paper A3', '10000.0000', 10, 1),
(29, 24, 'Art Paper A3', '10000.0000', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `description`, `category_id`, `price`) VALUES
(4, 'HVS A4 B/W Low', 'hvs-a4-bw-low', '', 9, 195),
(5, 'HVS A4 B/W Medium', 'hvs-a4-bw-medium', '', 9, 350),
(6, 'HVS A4 B/W High', 'hvs-a4-bw-high', '', 9, 700),
(7, 'HVS A4 Color Low', 'hvs-a4-color-low', '', 10, 800),
(8, 'HVS A4 Color Medium', 'hvs-a4-color-medium', '', 10, 1500),
(9, 'HVS A4 Color High', 'hvs-a4-color-high', '', 10, 3000),
(10, 'Art Paper A3', 'art-paper-a3', '(29.7 cm x 42 cm)', 12, 10000),
(11, 'Art Paper A4', 'art-paper-a4', '(29.7 cm x 21 cm)', 12, 9000),
(12, 'Art Paper A5', 'art-paper-a5', '(14.8 cm x 21 cm)', 12, 8000),
(13, 'Art Paper A6', 'art-paper-a6', '(10.5 cm x 14.8 cm)', 12, 7000),
(14, 'Matt Paper A3', 'matt-paper-a3', '(29.7 cm x 42 cm)', 13, 15000),
(15, 'Matt Paper A4', 'matt-paper-a4', '(29.7 cm x 21 cm)', 13, 14000),
(16, 'Matt Paper A5', 'matt-paper-a5', '(14.8 cm x 21 cm)', 13, 13000),
(17, 'Matt Paper A6', 'matt-paper-a6', '(10.5 cm x 14.8 cm)', 13, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ifs15024', 'Mvo7XIbYgL1ws0DA_xtV4CzLeOlYgjsf', '$2y$13$Cfgn7mON16wOciNrT0Sy5uvC/r.JJaILEbpXDudhviuoBdRO0n32i', NULL, 'ifs15024@gmail.com', 10, 1512464804, 1512464804),
(2, 'ricky', '8DXVcf6Gg5P6dq-Hld7LqNFxtvlSXx9D', '$2y$13$V6p3I2zpfuIyJMBTCXBsVupaYOwi/L7IfKf3oifJpm3z4KbU8Uwf2', NULL, 'ricky@gmail.com', 10, 1512464843, 1512464843),
(3, 'ifs15046', 'C16JMs5yok8DX2LPyZtn4LM4zbjsmNEq', '$2y$13$DjrbEk88Zm/C72O77DBPXeesC7riGtrjblwpCKd5/qskjcu6DE3xm', NULL, 'ifs15046@del.ac.id', 10, 1515509932, 1515509932);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-category-parent_id-category-id` (`parent_id`);

--
-- Indexes for table `coupon_code`
--
ALTER TABLE `coupon_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-image-product_id-product_id` (`product_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-order_item-order_id-order-id` (`order_id`),
  ADD KEY `fk-order_item-product_id-product-id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-product-category_id-category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `coupon_code`
--
ALTER TABLE `coupon_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk-category-parent_id-category-id` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk-image-product_id-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk-order_item-order_id-order-id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-order_item-product_id-product-id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category_id-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
