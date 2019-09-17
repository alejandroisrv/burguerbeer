-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2019 at 07:25 PM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-9+0~20190712.17+debian9~1.gbp3af52c

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burguerBeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `salsas`
--

CREATE TABLE `salsas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `categoria_id` int(3) NOT NULL,
  `estado` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salsas`
--

INSERT INTO `salsas` (`id`, `nombre`, `icon`, `categoria_id`, `estado`) VALUES
(0, 'Ketchup', '#c23236', 0, 1),
(0, 'Mostaza', '#cdb745', 0, 1),
(0, 'Ají', '#cea241', 0, 1),
(0, 'Golf', '#c96489', 0, 1),
(0, 'Mayonesa', '#fff', 0, 1),
(0, 'Tártara', '#fff', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
