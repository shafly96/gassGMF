-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 05:30 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_gmf_gambar` text NOT NULL,
  `about_gmf_text` text NOT NULL,
  `about_gass_gambar` text NOT NULL,
  `about_gass_text` text NOT NULL,
  `about_facility_gambar` text NOT NULL,
  `about_facility_text` text NOT NULL,
  `about_testimony_g1` text NOT NULL,
  `about_testimony_n1` text NOT NULL,
  `about_testimony_g2` text NOT NULL,
  `about_testimony_n2` text NOT NULL,
  `about_testimony_g3` text NOT NULL,
  `about_testimony_n3` text NOT NULL,
  `about_testimony_t1` text NOT NULL,
  `about_testimony_t2` text NOT NULL,
  `about_testimony_t3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `after_sales`
--

CREATE TABLE `after_sales` (
  `as_id` int(11) NOT NULL,
  `as_company_name` varchar(2000) NOT NULL,
  `as_contact_name` varchar(2000) NOT NULL,
  `as_email` varchar(2000) NOT NULL,
  `as_serial` varchar(2000) NOT NULL,
  `as_product_type` int(11) NOT NULL,
  `as_out` int(11) NOT NULL,
  `as_description` varchar(50000) NOT NULL,
  `as_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `after_sales_image`
--

CREATE TABLE `after_sales_image` (
  `asi_id` int(11) NOT NULL,
  `filename` varchar(5000) NOT NULL,
  `as_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_title` varchar(2000) NOT NULL,
  `berita_date` date NOT NULL,
  `berita_text` varchar(50000) NOT NULL,
  `berita_filename` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_title`, `berita_date`, `berita_text`, `berita_filename`) VALUES
(13, 'aaa', '2017-06-16', '<p><b></b></p><blockquote><b>lknk</b></blockquote><b></b><p></p>', 'aaa2017-06-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(2000) NOT NULL,
  `customer_filename` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footer_and_contacts`
--

CREATE TABLE `footer_and_contacts` (
  `fc_id` int(11) NOT NULL,
  `fc_about` varchar(10000) NOT NULL,
  `fc_address` varchar(10000) NOT NULL,
  `fc_telp1` varchar(50) NOT NULL,
  `fc_telp2` varchar(50) NOT NULL,
  `fc_email` varchar(1000) NOT NULL,
  `fc_email2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `homepage_gambar` varchar(10000) NOT NULL,
  `homepage_slogan` varchar(20000) NOT NULL,
  `homepage_id` int(11) NOT NULL,
  `homepage_slogan_subtext` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`homepage_gambar`, `homepage_slogan`, `homepage_id`, `homepage_slogan_subtext`) VALUES
('homepage.PNG', 'oaijdoajiodjaoi', 1, 'iojdqiowjdoadioajf');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_customer`
--

CREATE TABLE `homepage_customer` (
  `hc_id` int(11) NOT NULL,
  `hc_filename` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_email` varchar(1000) NOT NULL,
  `message_telephone` varchar(20) NOT NULL,
  `message_comment` varchar(50000) NOT NULL,
  `message_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_description` varchar(5000) NOT NULL,
  `product_specification` varchar(50000) NOT NULL,
  `product_tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_specification`, `product_tipe`) VALUES
(6, 'blabla', 'description', '<p>oiaefoij</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `pi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `filename` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`pi_id`, `product_id`, `filename`) VALUES
(11, 6, 'blabla0.jpg'),
(12, 6, 'blabla1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `reviews_name` varchar(1000) NOT NULL,
  `reviews_title` varchar(2000) NOT NULL,
  `reviews_description` varchar(50000) NOT NULL,
  `reviews_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `after_sales`
--
ALTER TABLE `after_sales`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  ADD PRIMARY KEY (`asi_id`),
  ADD KEY `as_id` (`as_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `footer_and_contacts`
--
ALTER TABLE `footer_and_contacts`
  ADD PRIMARY KEY (`fc_id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `homepage_customer`
--
ALTER TABLE `homepage_customer`
  ADD PRIMARY KEY (`hc_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`pi_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `reviews_product_id` (`reviews_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `after_sales`
--
ALTER TABLE `after_sales`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  MODIFY `asi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homepage_customer`
--
ALTER TABLE `homepage_customer`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  ADD CONSTRAINT `after_sales_image_ibfk_1` FOREIGN KEY (`as_id`) REFERENCES `after_sales` (`as_id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`reviews_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
