-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 10:24 AM
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
  `about_gmf_gambar` text,
  `about_gmf_text` text,
  `about_gass_gambar` text,
  `about_gass_text` text,
  `about_facility_gambar` text,
  `about_facility_text` text,
  `about_testimony_g1` text,
  `about_testimony_n1` text,
  `about_testimony_g2` text,
  `about_testimony_n2` text,
  `about_testimony_g3` text,
  `about_testimony_n3` text,
  `about_testimony_t1` text,
  `about_testimony_t2` text,
  `about_testimony_t3` text,
  `about_testimony_title1` varchar(300) DEFAULT NULL,
  `about_testimony_title2` varchar(300) DEFAULT NULL,
  `about_testimony_title3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_gmf_gambar`, `about_gmf_text`, `about_gass_gambar`, `about_gass_text`, `about_facility_gambar`, `about_facility_text`, `about_testimony_g1`, `about_testimony_n1`, `about_testimony_g2`, `about_testimony_n2`, `about_testimony_g3`, `about_testimony_n3`, `about_testimony_t1`, `about_testimony_t2`, `about_testimony_t3`, `about_testimony_title1`, `about_testimony_title2`, `about_testimony_title3`) VALUES
(1, 'about-gmf.png', '<p>ad</p>', NULL, NULL, 'about-gass.PNG', NULL, 'test1.png', 'john doe', 'test2.png', 'jihn doe', 'test3.png', 'jajon doe', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', 'CEO', 'CFO', 'CTO');

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
(30, 'asda', '2017-06-16', '<p>faeoifjeawifa</p><p>fawefoijaweoifjaw</p><p>faw</p><p>efaw</p><p>efa</p><p>wefafwefea<b>aefaefaefafe</b></p><p><b>afeafeafeafeeaf</b></p><p><b>aefaef</b></p><p><b></b></p><blockquote><b>afefafea</b></blockquote><blockquote><b>aefafeaef</b></blockquote><blockquote><b>eaf</b></blockquote><blockquote><b>afe</b></blockquote><blockquote><ul><li><b><b></b><br></b></li></ul></blockquote><p></p><blockquote>fa</blockquote>', 'asda2017-06-16.PNG'),
(31, 'asdad', '2017-06-16', '<p>\n\n</p><ul><li><div><div><br><div><div></div></div><div><a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues/221">&nbsp;22</a></div></div></div></li><li><div><div></div><div><a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues/213">paste tag</a><div>#213 opened on Sep 2, 2015 by <a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues?q=is%3Aissue+is%3Aopen+author%3Atimmyg">timmyg</a>&nbsp;</div></div><div><div><div></div></div><div></div></div></div></li><li><div><div></div><div><a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues/207">Paste from Word/other Editors</a><div>#207 opened on Aug 18, 2015 by <a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues?q=is%3Aissue+is%3Aopen+author%3Acristianbell">cristianbell</a>&nbsp;</div></div><div><div><div></div></div><div><a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues/207">&nbsp;1</a></div></div></div></li><li><div><div></div><div><a target="_blank" rel="nofollow" href="https://github.com/Voog/wysihtml/issues/195">Inserted text from Clipboard as plaintext</a></div></div></li></ul>\n\n<br><p></p>', 'asdad2017-06-16.PNG'),
(34, 'aapapap', '2017-06-19', '<p>aoefjoiajfioajf</p><p>afoajfoajfoiajfeor</p><p>ererrreerrerererererereer</p><p>reete</p>', 'aapapap2017-06-19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(2000) NOT NULL,
  `customer_filename` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_filename`) VALUES
(5, 'Facebook', 'Facebook.png');

-- --------------------------------------------------------

--
-- Table structure for table `footer_and_contacts`
--

CREATE TABLE `footer_and_contacts` (
  `fc_id` int(11) NOT NULL,
  `fc_address` varchar(10000) NOT NULL,
  `fc_telp1` varchar(50) NOT NULL,
  `fc_telp2` varchar(50) DEFAULT NULL,
  `fc_email` varchar(1000) NOT NULL,
  `fc_email2` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_and_contacts`
--

INSERT INTO `footer_and_contacts` (`fc_id`, `fc_address`, `fc_telp1`, `fc_telp2`, `fc_email`, `fc_email2`) VALUES
(1, '<p>askd</p><p>asd</p><p>asd</p>', 'asd', '09123', 'wongkalang@gmail.com', NULL);

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
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `homepage_customer`
--
ALTER TABLE `homepage_customer`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
