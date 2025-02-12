-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2024 at 02:02 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'tina', 'tinashsharmy@gmail.com', 'Ø¹Ø§Ù„ÛŒ Ø¨Ø³ÛŒ Ù¾Ø±ØªÙ‚Ø§Ù„ÛŒ', '2024-12-28 07:19:31'),
(2, 'tina shirazi', 'tinashsharmy@gmail.com', 'Ø¨Ø±Ø§Ø´ Ø´ÛŒÚ¯Ù„Ù…', '2024-12-28 10:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_brand` varchar(255) DEFAULT NULL,
  `p_price` varchar(255) DEFAULT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `p_description` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `p_name`, `p_brand`, `p_price`, `p_image`, `p_description`) VALUES
(1, 'Good Grip Hydrating Primer-Blueberry+AHA', 'sheglam', '8', '676efca68fead.jpg', 'Buckle in base makeup, because you\'re not going anywhere! Our silicone-free primer features a refreshing gel texture that makes your skin soft, smooth, and moist. Formulated with fruit extract and AHA, this primer keeps your makeup in place for hours on end and is suitable for your skin.'),
(3, 'Glow Bloom Liquid Highlighter-Vanilla Frost', 'sheglam', '159', '676efd60b8b0c.jpg', 'GLOW BABY GLOW!Our Glow Bloom Liquid Highlighter will get you gleaming to the gods with it'),
(4, 'Harry Potter™ X SHEGLAM Happee Birthdae Harry Blush', 'sheglam', '588', '676efda963c01.jpg', 'Celebrate every day like it\'s your birthday with Happee Birthdae Harry Blush! Inspired by the homemade charm of Harry\'s first-ever birthday cake, this pressed powder blush delivers a rosy pink hue that gives your cheeks a soft, magical glow. Featuring a smooth buildable formula, this blush adds just the right pop of color-because everyone deserves a little bit of sweetness.'),
(5, 'LOVE CAKE', 'sheglam', '558', '676fd927ab25e.jpg', 'رژگونه');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` enum('customer','admin') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `email`, `role`) VALUES
(1, 'tina', 'shirazi', 'tina', '123', 'tinashsharmy@gmail.com', 'admin'),
(3, 'mina', 'mina', 'mina', '123456', 'tinashshmy@gmail.com', 'admin'),
(5, 'tina', 'shirazi', 'tina2', '123456', 'tinashsharmy2@gmail.com', 'admin'),
(6, 'مریم', 'مریمی', 'm', '123', 'mihanwebhost@gmail.com', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
