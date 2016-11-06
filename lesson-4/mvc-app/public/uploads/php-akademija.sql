-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 03:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-akademija`
--

-- --------------------------------------------------------

--
-- Table structure for table `prijave`
--

CREATE TABLE `prijave` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `smjer` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `godina` int(11) NOT NULL,
  `motiv` text COLLATE utf8_croatian_ci,
  `predznanje` text COLLATE utf8_croatian_ci,
  `php` tinyint(1) DEFAULT NULL,
  `java` tinyint(1) DEFAULT NULL,
  `python` tinyint(1) DEFAULT NULL,
  `c` tinyint(1) DEFAULT NULL,
  `drugi` tinyint(1) DEFAULT NULL,
  `kod` tinytext COLLATE utf8_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `prijave`
--

INSERT INTO `prijave` (`id`, `ime`, `email`, `smjer`, `godina`, `motiv`, `predznanje`, `php`, `java`, `python`, `c`, `drugi`, `kod`) VALUES
(2, 'sda', 'gag@sasd', 'as', 3, 'gasa', 'gsasag', 1, NULL, NULL, NULL, NULL, NULL),
(3, 'ojsai', 'soajdoj@posodak', 'sda', 2, 'siodajs\r\n        ', 'smkadk    ', 1, 1, 1, 1, 1, '02-post-get.php'),
(4, 'dsajk', 'slad@opksda', 'lkjaj', 3, 'dsoija\r\n        ', 'jjdsa\r\n        ', 1, 0, 0, 0, 0, 'login.php'),
(5, 'dsa', 'kjsdlak@xn--lsdka-hya', 'llskalk', 4, '\r\n        ', '\r\n        ', 0, 0, 0, 0, 0, '02-post-get.php'),
(6, 'fsaoji', 'sakd@dsuiahu', 'osdjaj', 5, '\r\n        ', '\r\n        ', 0, 0, 0, 0, 0, '02-post-get.php'),
(7, 'petar', 'petar.bosnjak@yahoo.com', 'jsdia', 1, '\r\n        ', '\r\n        ', 0, 0, 0, 0, 0, 'notes.md');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prijave`
--
ALTER TABLE `prijave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prijave`
--
ALTER TABLE `prijave`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
