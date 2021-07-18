-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 03:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bargraph`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `Country` varchar(40) NOT NULL,
  `PageID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`Country`, `PageID`) VALUES
('India', 27),
('India', 0),
('India', 0),
('United States', 20),
('India', 0),
('India', 0),
('United States', 0),
('United States', 0),
('United States', 14),
('United States', 0),
('United States', 0),
('India', 0),
('India', 0),
('Taiwan, Province of China', 0),
('United States', 0),
('India', 0),
('India', 24),
('Israel', 20),
('Saudi Arabia', 0),
('United States', 0),
('India', 0),
('Finland', 0),
('Finland', 27),
('Israel', 20),
('United States', 0),
('India', 0),
('India', 0),
('India', 0),
('United States', 0),
('United States', 0),
('United Kingdom', 0),
('United Kingdom', 28),
('India', 0),
('India', 0),
('United States', 0),
('United States', 0),
('United States', 26),
('Australia', 0),
('United States', 0),
('United States', 0),
('United States', 0),
('United States', 0),
('India', 0),
('Portugal', 0),
('Portugal', 27),
('Portugal', 0),
('Portugal', 27),
('Israel', 20),
('India', 0),
('Bangladesh', 0),
('United States', 0),
('United States', 27),
('United States', 28),
('Bangladesh', 0),
('Bangladesh', 27),
('Bangladesh', 26),
('India', 0),
('Bangladesh', 26),
('India', 0),
('United Kingdom', 0),
('United States', 0),
('Germany', 0),
('Germany', 0),
('Germany', 27),
('Germany', 26),
('Germany', 25),
('Germany', 28),
('Germany', 20),
('Germany', 19),
('Germany', 18),
('Germany', 17),
('Germany', 14),
('Germany', 13),
('United States', 0),
('United States', 0),
('United States', 0),
('United States', 26),
('India', 20),
('Hungary', 0),
('United States', 0),
('Philippines', 0),
('Philippines', 27),
('Pakistan', 0),
('United States', 0),
('United States', 0),
('Canada', 0),
('Canada', 14),
('United States', 19),
('United States', 0),
('Egypt', 0),
('United States', 0),
('Sri Lanka', 0),
('Philippines', 0),
('India', 0),
('India', 27),
('India', 27),
('United States', 0),
('United States', 0),
('India', 0),
('India', 0),
('Germany', 0),
('India', 0),
('United Kingdom', 0),
('India', 0),
('India', 0),
('India', 0),
('China', 25),
('India', 0),
('India', 0),
('Suriname', 0),
('Suriname', 0),
('Philippines', 0),
('Philippines', 27),
('Philippines', 27),
('India', 0),
('Philippines', 0),
('India', 0),
('United States', 20),
('United States', 0),
('United States', 0),
('United States', 27),
('India', 0),
('United States', 0),
('India', 0),
('India', 0),
('United States', 0),
('United States', 0),
('United States', 0),
('United States', 0),
('United States', 0),
('India', 0),
('United States', 0),
('United States', 27),
('United States', 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
