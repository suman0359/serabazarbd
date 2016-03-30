-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2016 at 09:35 PM
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
  `category_image` varchar(255) NOT NULL,
  `category_thumb_image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `parent_category_id` varchar(5) DEFAULT NULL,
  `creator_user_id` varchar(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `parent_category_id` (`parent_category_id`,`creator_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_image`, `category_thumb_image`, `date`, `parent_category_id`, `creator_user_id`, `status`) VALUES
(36, 'Demo', '6c65b740d895b2ab84dfd7e27436601a.png', '6c65b740d895b2ab84dfd7e27436601a.png', '2016-03-30 12:56:23', NULL, '', 1),
(37, 'Demosfdsafsafsafd', '707b265f8996c0a0e38fada9a5714320.png', '707b265f8996c0a0e38fada9a5714320.png', '2016-03-30 12:51:43', '36', '', 1),
(38, 'Demosfdsafsafsafd', '1cb8ccb79d272f219c880f0f130de7be.png', '1cb8ccb79d272f219c880f0f130de7be.png', '2016-03-30 12:56:27', NULL, '', 1),
(39, 'sdsdsd', 'afb1dc1b5ee21e50b182b56424a56392.jpg', 'afb1dc1b5ee21e50b182b56424a56392.jpg', '2016-03-30 13:31:42', NULL, '1', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `category_id`, `parent_category_id`, `product_image`, `product_thumb_image`, `date`, `product_quantity`, `creator_user_id`, `sell_price`, `price`, `status`) VALUES
(1, 'Soya Oil', '36', '37', 'd42934051cd73fd1b631021232a110cd.jpg', 'd42934051cd73fd1b631021232a110cd.jpg', '2016-03-30 15:17:00', '50', '1', '499', '600', 1),
(2, 'Fresh Salt', '39', '37', '42bc29cdf0605ee60371d6fdbfc4be7d.jpg', '42bc29cdf0605ee60371d6fdbfc4be7d.jpg', '2016-03-30 15:16:48', '30', '1', '49', '50', 1);

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
