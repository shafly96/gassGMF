-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 05:24 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gassgmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepage_image`
--

CREATE TABLE `homepage_image` (
  `homepage_id` int(11) NOT NULL,
  `homepage_gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_image`
--

INSERT INTO `homepage_image` (`homepage_id`, `homepage_gambar`) VALUES
(5, 'a9bd5bde50f43542e2ae2dc4dd60febe.png'),
(6, '983970ce394621a1ed09490ce294a1d2.jpg'),
(7, '9c810fbfdcf78769ae0ac791d0a29d90.jpg'),
(8, '3392d4ba033c5155dad1bb2b8482af82.jpg'),
(9, '85021d6c82615791b3a7efeb03f4a4f6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepage_image`
--
ALTER TABLE `homepage_image`
  ADD PRIMARY KEY (`homepage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepage_image`
--
ALTER TABLE `homepage_image`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
