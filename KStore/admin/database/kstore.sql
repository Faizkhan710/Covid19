-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 01:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
-- Error reading structure for table kstore.cart: #1932 - Table 'kstore.cart' doesn't exist in engine
-- Error reading data for table kstore.cart: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `kstore`.`cart`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(30, 'Mobiles', 10),
(33, 'laptop', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`, `price`) VALUES
(49, 'abc', 'sdafdsf', '30', '18 Oct, 2022', 26, 'post_1.jpg', 2500),
(50, 'Ea reiciendis numqua', 'Quos ullam iusto mag', '30', '25 Oct, 2022', 26, 'product7.jpg', 2500),
(48, 'logo', 'this is logo', '33', '18 Oct, 2022', 26, 'logo.png', 2500),
(47, 'Wifi router', 'This is wifi router', '30', '11 Oct, 2022', 26, 'product5.jpg', 2500),
(45, 'bag', 'This is Quality Bag.', '30', '11 Oct, 2022', 26, 'product7.jpg', 2500),
(46, 'bag blue', 'This is blue bag', '33', '11 Oct, 2022', 26, 'product6.jpg', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(24, 'Claudia Burton', 'Drake Mcintyre', 'Sed molestiae beatae', 'Pa$$w0rd!', 1),
(25, 'khalid', 'khan', 'dot_khalid', 'admin', 1),
(26, 'admin', 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(27, 'hamza', 'khan', 'hm', '123', 0),
(28, 'hanzal', 'khan', 'hanzala', '202cb962ac59075b964b07152d234b70', 1),
(29, 'Faraz', 'khan', 'faraz', '202cb962ac59075b964b07152d234b70', 1),
(30, 'Tatum Carroll', 'Hadassah Daniels', 'Dolorem velit et in ', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1),
(31, 'Heather Lawson', 'Leigh Donaldson', 'Perferendis est quia', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 0),
(38, 'Wayne Stein', 'Oliver Johnson', 'adnan', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
