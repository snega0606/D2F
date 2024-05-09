-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 10:02 AM
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
-- Database: `df`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `phoneno`) VALUES
('Balaji S', '$2y$10$0V.iUbxsfR3IZF6gZO5ypONBWGC24CqXEW9wW6RAeeq5/B5gDg71K', '', '8838818193'),
('Balaji S', '$2y$10$0V.iUbxsfR3IZF6gZO5ypONBWGC24CqXEW9wW6RAeeq5/B5gDg71K', 'balajisara100@gmail.com', '8838818193'),
('avinash', '$2y$10$yn1iexyK.GQnci3gsLDNu.p3kBULLyZ5Ieg9ynSBew9jMqgREXcOq', 'avinasharul1911@gmail.com', '9344489893'),
('avi', '$2y$10$WUhtinz3kmaCCFmDTddhTeZ0yUvPa.i4NTAEdoDMdERnhPSgdbSbC', 'avinasharul1911@gmail.com', '9344489893'),
('Bharani', '$2y$10$IohL56BVHJ1d6z9ut1Q.ge84Uly5HUlfPVKYL3h4aOPIRvkccX1I.', 'barubharani1408@gmail.com', '9600960484'),
('arul', '$2y$10$0BYh2zW017pt1mRBdZlPBOCkGgeBQ6cOIM36PcCilPvoqGpKYZoqu', 'avinasharul2011@gmail.com', '1234567891');

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

DROP TABLE IF EXISTS `admindata`;
CREATE TABLE IF NOT EXISTS `admindata` (
  `empno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`empno`) VALUES
(202410),
(202408),
(202414);

-- --------------------------------------------------------

--
-- Table structure for table `billfruits`
--

DROP TABLE IF EXISTS `billfruits`;
CREATE TABLE IF NOT EXISTS `billfruits` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `fruits` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `payment_mode` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billfruits`
--

INSERT INTO `billfruits` (`name`, `email`, `address`, `mobile`, `fruits`, `quantity`, `payment_mode`) VALUES
('balaji', 'balajisara100@gmail.com', 'no 12 mettu street valavanur', 88388181, 'bananna', 5, 'online mode'),
('Avinash A', 'avinasharul1911@gmail.com', 'no 9 k.pattari street valavanur', 934448, 'mango', 8, 'offline'),
('Dhinesh S', 'dhinesh2743@gmail.com', 'No 5 North Venugopalapuram', 861079, 'jack fruit', 2, 'online mode');

-- --------------------------------------------------------

--
-- Table structure for table `billnuts`
--

DROP TABLE IF EXISTS `billnuts`;
CREATE TABLE IF NOT EXISTS `billnuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `nuts` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billnuts`
--

INSERT INTO `billnuts` (`id`, `name`, `email`, `address`, `mobile`, `nuts`, `quantity`, `payment_mode`) VALUES
(2, 'Dhinesh S', 'dhinesh2743@gmail.com', 'No 5 North Venugopalapuram', 861079, 'Peanut', 2, 'online mode');

-- --------------------------------------------------------

--
-- Table structure for table `billveg`
--

DROP TABLE IF EXISTS `billveg`;
CREATE TABLE IF NOT EXISTS `billveg` (
  `name` varchar(50) NOT NULL,
  `email` varchar(78) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `vegetables` varchar(50) NOT NULL,
  `quantity` int(70) NOT NULL,
  `payment_mode` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billveg`
--

INSERT INTO `billveg` (`name`, `email`, `address`, `mobile`, `vegetables`, `quantity`, `payment_mode`) VALUES
('Avinash', 'avinasharul1911@gmail.com', 'no 9 k pattari street valavanur', 934448, 'mango', 8, 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount_per_kg` double NOT NULL,
  `discount_per_kg` double NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_type`, `product_name`, `email`, `amount_per_kg`, `discount_per_kg`, `img`) VALUES
(15, 'fruits', 'bananna', 'balajisara100@gmail.com', 70, 20, 'uploads/ban.jpg'),
(16, 'fruits', 'jackfruit', 'balajisara100@gmail.com', 260, 60, 'uploads/jac.jpg'),
(17, 'vegetables', 'tomato', 'balajisara100@gmail.com', 50, 20, 'uploads/tom.jpg'),
(18, 'vegetables', 'onion', 'balajisara100@gmail.com', 55, 15, 'uploads/oni.jpg'),
(19, 'vegetables', 'carrot', 'balajisara100@gmail.com', 60, 10, 'uploads/car.jpg'),
(20, 'nuts', 'Cashew Nuts', 'balajisara100@gmail.com', 250, 50, 'uploads/cas.jpg'),
(21, 'nuts', 'almond', 'balajisara100@gmail.com', 200, 50, 'uploads/almond.jpeg'),
(22, 'nuts', 'peanut', 'balajisara100@gmail.com', 80, 20, 'uploads/nut.jpg'),
(23, 'fruits', 'mango', 'balajisara100@gmail.com', 120, 20, 'uploads/man.jpg'),
(24, 'vegetables', 'tomato', 'avinasharul2011@gmail.com', 230, 30, 'uploads/tom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `password`, `phoneno`) VALUES
('BALAJI S', '$2y$10$lhO1RbNflzOD5ULpfF1CvuvjfjEYU6YMhQG64ZG4NA/0jw8135aiy', '8838818193'),
('kavi', '$2y$10$lhO1RbNflzOD5ULpfF1CvuvjfjEYU6YMhQG64ZG4NA/0jw8135aiy', '8838818193'),
('avinash', '$2y$10$CT8p0wCEHykXWRuVNl4B.u63BDKCKISJJNi7/RRVkcst7uruJ0JFm', '9344489893'),
('avinash', '$2y$10$CT8p0wCEHykXWRuVNl4B.u63BDKCKISJJNi7/RRVkcst7uruJ0JFm', '9344489893'),
('avinash', '$2y$10$CT8p0wCEHykXWRuVNl4B.u63BDKCKISJJNi7/RRVkcst7uruJ0JFm', '9344489893'),
('kumara', '$2y$10$ZHeHG6pw6E9mu7eQMaUMy.riaYboKiYDlKYVoPk6xxDb6oS677c9C', '6383800026'),
('Balaji S', '$2y$10$lhO1RbNflzOD5ULpfF1CvuvjfjEYU6YMhQG64ZG4NA/0jw8135aiy', '8838818193'),
('avinash', '$2y$10$CT8p0wCEHykXWRuVNl4B.u63BDKCKISJJNi7/RRVkcst7uruJ0JFm', '9344489893'),
('parthi', '$2y$10$ksAV15Bo0vLVQPkFQS8bVuzFzYV5AKguNehOWvibNzpJH1awqLyI6', '96005369532'),
('mani', '$2y$10$WNx8V0l2HhJZQXNidB.q2.bVeGvZl8yIWTyfE2kDASJTQ8lL3JaQe', '9876543212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
