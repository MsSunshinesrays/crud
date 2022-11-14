-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2022 at 12:18 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

DROP database IF EXISTS `crud`;
create database 'crud';

CREATE TABLE `crud` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_add` varchar(255) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
);

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`user_id`, `user_name`, `user_email`, `user_password`, `user_add`, `user_phone`) VALUES
(14, 'admin', 'adm@gmail.com', '123', 'abc', '1234567890'),
(15, 'avi', 'av@gmail.com', '123', 'nbc', '1234567890'),
(19, 'Avisha', 'avi@gamil.com', '789', 'test', '9123456789'),
(16, 'abc', 'abc@gmail.com', '123', 'abc', '6758677543'),
(18, 'aek', 'ae@gmail.com', '456', 'error', '3456198721');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
