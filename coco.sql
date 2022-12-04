-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2022 at 04:29 AM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coco`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `user_id`, `data`, `date`) VALUES
(6, 1, '[{"cart_id":"29","user_id":"1","prod_id":"1","quantity":"1","time":"2022-12-04 10:15:05"}]', '2022-12-04 10:15:07'),
(9, 1, '[{"cart_id":"32","user_id":"1","prod_id":"1","quantity":"1","time":"2022-12-04 10:33:56"},{"cart_id":"33","user_id":"1","prod_id":"8","quantity":"1","time":"2022-12-04 10:33:57"},{"cart_id":"34","user_id":"1","prod_id":"4","quantity":"1","time":"2022-12-04 10:33:59"}]', '2022-12-04 10:34:08'),
(10, 1, '[{"cart_id":"35","user_id":"1","prod_id":"3","quantity":"2","time":"2022-12-04 10:50:19"},{"cart_id":"36","user_id":"1","prod_id":"4","quantity":"1","time":"2022-12-04 10:50:22"},{"cart_id":"37","user_id":"1","prod_id":"8","quantity":"1","time":"2022-12-04 10:50:25"},{"cart_id":"38","user_id":"1","prod_id":"6","quantity":"1","time":"2022-12-04 10:50:27"}]', '2022-12-04 10:50:30'),
(11, 1, '[]', '2022-12-04 11:10:59'),
(12, 1, '[]', '2022-12-04 11:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `price` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `type`, `price`, `amount`) VALUES
(1, 'AB Normal', 'img/mask/001.jpg', 'Mask', '100', '1000'),
(3, 'RedBull', 'img/mask/002.jpg', 'Mask', '150', '1200'),
(4, 'ABC', '', 'Face Shield', '200', '100'),
(5, 'ON THE Full', '', 'Face Shield', '250', '100'),
(6, 'NINEE', '', 'alcolhol', '100', '100'),
(7, 'BOXXING ', '', 'alcolhol', '110', '150'),
(8, 'hand', '', 'Techno ', '120', '150');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `tel`, `email`, `password`, `status`) VALUES
(1, 'user', 'where', '0000000000', 'user@gmail.com', 'user', 1),
(2, 'สวัสดี', 'unknown', '1', 'admin@gmail.com', 'admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
