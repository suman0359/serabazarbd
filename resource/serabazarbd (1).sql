-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 09:25 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `serabazarbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  `category_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'main_category = 0; sub_category=1;',
  `category_thumb_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `parent_category_id` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `creator_user_id` varchar(5) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `parent_category_id` (`parent_category_id`,`creator_user_id`),
  KEY `category_type` (`category_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_image`, `category_type`, `category_thumb_image`, `date`, `parent_category_id`, `creator_user_id`, `status`) VALUES
(36, 'ফল ও শাকসব্জি', '1db09c33b4f0ce28f837314c67089175.jpeg', 1, '1db09c33b4f0ce28f837314c67089175.jpeg', '2016-03-31 13:57:16', '37', '1', 1),
(37, 'Home & Cleaning', '902d969d1efffb8390c773d6187aeaeb.jpeg', 0, '902d969d1efffb8390c773d6187aeaeb.jpeg', '2016-03-31 11:27:02', '', '1', 1),
(38, 'Beauty & Health', 'd1c0b5344430df9295de200179560f8a.jpeg', 0, 'd1c0b5344430df9295de200179560f8a.jpeg', '2016-03-31 11:28:10', '', '1', 1),
(39, 'Baby Care', '8d076e96498d5f46af9fb7721eceb2bf.jpeg', 1, '8d076e96498d5f46af9fb7721eceb2bf.jpeg', '2016-03-31 11:26:10', '37', '1', 1),
(40, 'Office Products', '3591db45487055cadc405621af548938.jpeg', 0, '3591db45487055cadc405621af548938.jpeg', '2016-03-31 11:36:55', NULL, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `parent_category_id` varchar(5) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_thumb_image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_quantity` varchar(8) NOT NULL,
  `creator_user_id` varchar(5) NOT NULL,
  `sell_price` varchar(8) NOT NULL,
  `price` varchar(8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`,`parent_category_id`,`creator_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `category_id`, `parent_category_id`, `product_image`, `product_thumb_image`, `date`, `product_quantity`, `creator_user_id`, `sell_price`, `price`, `status`) VALUES
(1, 'Soya Oil', '36', '37', 'd42934051cd73fd1b631021232a110cd.jpg', 'd42934051cd73fd1b631021232a110cd.jpg', '2016-03-30 15:17:00', '50', '1', '499', '600', 1),
(2, 'Fresh Salt', '39', '37', '42bc29cdf0605ee60371d6fdbfc4be7d.jpg', '42bc29cdf0605ee60371d6fdbfc4be7d.jpg', '2016-03-30 15:16:48', '30', '1', '49', '50', 1),
(3, 'Pedia Sure Premium Chocolate Jar', '39', '36', 'fdfbe24656d3edfe3e098742929b16ad.jpeg', 'fdfbe24656d3edfe3e098742929b16ad.jpeg', '2016-03-31 14:27:26', '12', '1', '99', '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_role` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` text NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `profile_thumb_image` varchar(255) NOT NULL,
  `reset_request` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `mobile_no`, `password`, `first_name`, `last_name`, `user_role`, `date`, `address`, `profile_image`, `profile_thumb_image`, `reset_request`, `status`) VALUES
(1, 'admin', 'tasfirsuman@gmail.com', '01911198784', '21232f297a57a5a743894a0e4a801fc3', 'Tasfir Hossain', 'Suman', 9, '2016-03-29 10:57:56', 'House# 01, Road# 06, Block# C, Banasree, Rampura, Dhaka-1219', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
