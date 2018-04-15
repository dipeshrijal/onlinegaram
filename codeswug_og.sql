-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2014 at 05:13 AM
-- Server version: 5.1.63-rel13.4-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeswug_og`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_discount_price` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `product_availability` varchar(255) NOT NULL,
  `sub_cat_id` int(10) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `sub_cat_id` (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_code`, `product_color`, `product_price`, `product_discount_price`, `product_size`, `product_status`, `product_availability`, `sub_cat_id`) VALUES
(1, 'New Balance', 'New Balance', 'NB01', 'Grey,Red,Black', '4100', '4000', '39,40,41,42,43', 'New', 'Yes', 1),
(2, 'Leather Shoes', 'Leather Shoes', 'HK33', 'Brown,Black', '3200', '3000', '39,40,41,42,43', 'New', 'Yes', 1),
(7, 'Zara Shoes', 'Zara Shoes', 'ZS001', 'Brown', '', '2500', '39', 'Bestsellers', 'Yes', 1),
(9, 'Wallet', 'Wallet', 'W002', 'Brown', '', '800', '', 'New', 'Yes', 2),
(10, 'Wallet', 'Wallet', 'W003', '', '1000', '900', '', 'Special', 'Yes', 2),
(11, 'Ladies Shoes', 'Ladies Shoes', 'LS01', 'Red,White', '1200', '1000', '39', 'Featured', 'Yes', 3),
(12, 'Wallet', '', 'W001', '', '1200', '1000', '', 'Featured', 'Yes', 2),
(15, 'Nike (Air Max)', 'Air Max', '', 'Blue', '2500', '2300', '39', 'Bestsellers', 'Yes', 1),
(16, 'Shoes', 'Shoes', 'S100', 'White', '1500', '1300', '39', 'Special', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `product_image_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_image_path` varchar(255) NOT NULL,
  `product_image_name` varchar(255) NOT NULL,
  `product_image_type` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`product_image_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_image_path`, `product_image_name`, `product_image_type`, `product_id`) VALUES
(1, 'products/poster2013-12-1607-26-31.jpg', 'poster2013-12-1607-26-31.jpg', 'poster', 1),
(2, 'products/right2013-12-1607-26-31.jpg', 'right2013-12-1607-26-31.jpg', 'right', 1),
(3, 'products/left2013-12-1607-26-31.jpg', 'left2013-12-1607-26-31.jpg', 'left', 1),
(4, 'products/slider2013-12-1607-26-47.jpg', 'slider2013-12-1607-26-47.jpg', 'slider', 1),
(5, 'products/poster2013-12-1607-30-15.jpg', 'poster2013-12-1607-30-15.jpg', 'poster', 2),
(6, 'products/right2013-12-1607-30-15.jpg', 'right2013-12-1607-30-15.jpg', 'right', 2),
(7, 'products/left2013-12-1607-30-15.jpg', 'left2013-12-1607-30-15.jpg', 'left', 2),
(12, 'products/other2013-12-1607-32-46.jpg', 'other2013-12-1607-32-46.jpg', 'other', 2),
(13, 'products/slider2013-12-1607-32-57.jpg', 'slider2013-12-1607-32-57.jpg', 'slider', 2),
(26, 'products/poster2014-01-0405-32-55.jpg', 'poster2014-01-0405-32-55.jpg', 'poster', 7),
(27, 'products/right2014-01-0405-32-55.jpg', 'right2014-01-0405-32-55.jpg', 'right', 7),
(28, 'products/left2014-01-0405-32-55.jpg', 'left2014-01-0405-32-55.jpg', 'left', 7),
(32, 'products/poster2014-01-0405-39-28.jpg', 'poster2014-01-0405-39-28.jpg', 'poster', 9),
(33, 'products/right2014-01-0405-39-28.jpg', 'right2014-01-0405-39-28.jpg', 'right', 9),
(34, 'products/left2014-01-0405-39-28.jpg', 'left2014-01-0405-39-28.jpg', 'left', 9),
(35, 'products/poster2014-01-0405-49-46.jpg', 'poster2014-01-0405-49-46.jpg', 'poster', 10),
(36, 'products/right2014-01-0405-49-46.jpg', 'right2014-01-0405-49-46.jpg', 'right', 10),
(37, 'products/left2014-01-0405-49-46.jpg', 'left2014-01-0405-49-46.jpg', 'left', 10),
(38, 'products/poster2014-01-0406-19-19.jpg', 'poster2014-01-0406-19-19.jpg', 'poster', 11),
(39, 'products/right2014-01-0406-19-19.jpg', 'right2014-01-0406-19-19.jpg', 'right', 11),
(40, 'products/left2014-01-0406-19-19.jpg', 'left2014-01-0406-19-19.jpg', 'left', 11),
(41, 'products/poster2014-01-0406-39-25.jpg', 'poster2014-01-0406-39-25.jpg', 'poster', 12),
(42, 'products/right2014-01-0406-39-25.jpg', 'right2014-01-0406-39-25.jpg', 'right', 12),
(43, 'products/left2014-01-0406-39-25.jpg', 'left2014-01-0406-39-25.jpg', 'left', 12),
(50, 'products/slider2014-01-0407-10-51.jpg', 'slider2014-01-0407-10-51.jpg', 'slider', 7),
(53, 'products/left2014-01-0410-59-38.jpg', 'left2014-01-0410-59-38.jpg', 'left', 15),
(54, 'products/poster2014-01-0411-01-20.jpg', 'poster2014-01-0411-01-20.jpg', 'poster', 16),
(55, 'products/right2014-01-0411-01-20.jpg', 'right2014-01-0411-01-20.jpg', 'right', 16),
(56, 'products/left2014-01-0411-01-20.jpg', 'left2014-01-0411-01-20.jpg', 'left', 16),
(57, 'products/poster2014-01-0411-11-08.jpg', 'poster2014-01-0411-11-08.jpg', 'poster', 15),
(59, 'products/right2014-01-0411-26-59.jpg', 'right2014-01-0411-26-59.jpg', 'right', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(255) NOT NULL,
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`sub_cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `sub_cat_name`, `cat_id`) VALUES
(1, 'Shoes', 1),
(2, 'Wallet', 1),
(3, 'Shoes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'dikshit21@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`sub_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
