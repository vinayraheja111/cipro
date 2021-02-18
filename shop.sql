-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2021 at 08:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin_type`) VALUES
(1, 'vinay', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'ClOTHS', 'CLOTHS CATEGORY'),
(2, 'FOOD AND BEVERGE', 'FOOD AND BEVERAGE'),
(3, 'HEALTH AND BEAUTY', 'HEALTH AND BEAUTY'),
(4, 'BOOKS AND ENTERTAINMENT', 'BOOKS AND ENTERTAINMENT'),
(5, 'ELECTTRONICS', 'ELECTTRONICS');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(10) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_type` int(2) NOT NULL,
  `pro_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat_id`, `pro_name`, `pro_price`, `pro_image`, `pro_type`, `pro_time`) VALUES
(1, 5, 'Camera', 10000, 'assets/uploads/products/1.jpg', 1, '2021-02-07 05:14:26'),
(2, 5, 'Mobile', 20000, 'assets/uploads/products/2.jpg', 1, '2021-02-07 05:14:26'),
(3, 5, 'Memory', 1000, 'assets/uploads/products/3.jpg', 1, '2021-02-07 05:14:26'),
(4, 5, 'Ear Phones', 2000, 'assets/uploads/products/4.jpg', 1, '2021-02-07 05:14:26'),
(5, 5, 'Headfone', 200, 'assets/uploads/products/11.jpg', 1, '2021-02-07 08:49:38'),
(6, 1, 'shoes', 200, 'assets/uploads/products/b1.jpg', 2, '2021-02-07 08:49:38'),
(7, 1, 'Belly', 200, 'assets/uploads/products/b2.jpg', 2, '2021-02-07 08:49:38'),
(8, 5, 'Camera3', 10000, 'assets/uploads/products/1.jpg', 3, '2021-02-07 05:14:26'),
(9, 5, 'Mobile3', 20000, 'assets/uploads/products/2.jpg', 3, '2021-02-07 05:14:26'),
(10, 5, 'Memory3', 1000, 'assets/uploads/products/3.jpg', 3, '2021-02-07 05:14:26'),
(11, 5, 'Ear Phones3', 2000, 'assets/uploads/products/4.jpg', 3, '2021-02-07 05:14:26'),
(12, 5, 'Ear Phones3', 2000, 'assets/uploads/products/4.jpg', 3, '2021-02-07 05:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `lname`, `email`, `password`, `city`, `zip`, `mobile`, `ip`, `cdate`) VALUES
(2, 'vinay', 'vinay', 'raheja', 'admin@gmail.com', '12345', 'tohana', 125120, 9729398981, '', '2021-02-04 09:28:18'),
(3, 'vinay', 'vinay111', 'raheja', 'admin1@gmail.com', '12345', 'tohana', 125120, 9729398922, '127.0.0.1', '2021-02-04 09:48:26'),
(4, 'vinay', 'vinay1112', 'raheja', 'vinayraheja111@gmail.com', 'Vinay111@', 'tohana', 125120, 9729398921, '127.0.0.1', '2021-02-04 09:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
