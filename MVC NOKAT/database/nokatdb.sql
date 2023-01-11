-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2023 at 11:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nokatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `nokat`
--

DROP TABLE IF EXISTS `nokat`;
CREATE TABLE IF NOT EXISTS `nokat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `nokat`
--

INSERT INTO `nokat` (`id`, `name`) VALUES
(1, 'Galek had wahed dkhoul sou9 rassek4'),
(57, 'saad'),
(59, 'dsa'),
(60, 'd'),
(61, 'd'),
(62, 'd'),
(63, 'd'),
(64, 'd'),
(65, 'd'),
(66, 'd'),
(67, 'd'),
(68, 'hi'),
(69, 'd'),
(70, 'd'),
(71, 'd'),
(72, 'd'),
(73, 'd'),
(75, 'dsa'),
(76, 'dsa'),
(77, 'saad'),
(78, 'ff'),
(79, 'd'),
(80, 'd'),
(81, 'd'),
(82, 'd'),
(83, 'c'),
(84, 'b'),
(85, 'd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
