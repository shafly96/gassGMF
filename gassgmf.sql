-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 06:01 AM
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
(1, 'about-gmf.jpg', '<p>\r\n\r\n</p><div><p>Started out in 1949, GMF AeroAsia originated as the Technical Division of Garuda Indonesia airline and transformed into independent entity in 2002, With more than 60 years of expertise as an Aircraft Maintenance Repair and Overhaul company. As the market leader in Indonesia and the global player in MRO industry, GMF AeroAsia provides its best quality services for airlines across the world that reaches more than 60 nations in 5 continents.</p><p>GMF AeroAsia provides a wide-range aircraft maintenance services, such as Line Maintenance, Base Maintenance, Component Maintenance, Engine &amp; APU Maintenance, Cabin Maintenance, Engineering Services, Material Services, Logistic &amp; Bonded Services, Learning Services for various aircraft type such as Boeing 737, Boeing 747, Boeing 777, Airbus A320, Airbus A330, Bombardier CRJ1000, and ATR 72-600 and other outside aircraft service GMF Power Services, provides comprehensive repair and overhaul of industrial gas turbine engines. Offering an aircraft maintenance solution, GMF AeroAsia is complied with many certified authorities’ regulations, including Indonesia DGCA, United States FAA, European EASA, and many others.</p></div><br>\r\n\r\n<p></p>', 'about-gass.jpg', '<p>lkmdlkamdoapkaepoafapokfpakfpafa</p><p>fapokfpaofkpoakfpfapofk</p><p>afpoaekfpoakf</p>', 'about-gass.PNG', NULL, 'test1.jpg', 'john doe', 'test2.png', 'jihn doe', 'test3.png', 'jajon doe', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', ') method returns a collection of all elements in the document with the specified class name, as a NodeList object.\r\n\r\nThe NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.\r\n\r\nTip: You can use the length property of t', 'CEO', 'CFO', 'CTO');

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

--
-- Dumping data for table `after_sales`
--

INSERT INTO `after_sales` (`as_id`, `as_company_name`, `as_contact_name`, `as_email`, `as_serial`, `as_product_type`, `as_out`, `as_description`, `as_timestamp`) VALUES
(3, 'Garuda Indonesia', 'Ario Bimo', 'masgondi234@gmail.com', '123129faiojfea', 1, 1, 'rusak gabisa jalan', '2017-06-20 00:36:29'),
(4, 'Araaifaiofj', 'ajfeoiefjo', 'masgondi234@gmail.com', 'aiofoaiwfj2112', 2, 1, 'langsung rusak', '2017-06-20 00:54:11'),
(5, 'Garuda Indonesia', 'Safli noval', 'wongkalang@gmail.com', 'OJOIDA1123OI', 1, 0, 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2017-06-20 17:46:33'),
(6, 'Garuda Indonesia', 'mamma', 'anna@majujaya.co.id', 'afmkame3', 22, 0, 'bunyi', '2017-06-21 21:05:41'),
(7, 'Mallaghan GSE', 'John Doe', 'JohnDoe@yahoo.com', 'aiofa323nsjfkfa', 24, 0, 'Deicer not working', '2017-06-21 21:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `after_sales_image`
--

CREATE TABLE `after_sales_image` (
  `asi_id` int(11) NOT NULL,
  `filename` varchar(5000) NOT NULL,
  `as_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_sales_image`
--

INSERT INTO `after_sales_image` (`asi_id`, `filename`, `as_id`) VALUES
(4, '14380854412f3f326f341db2ef644c3e.jpg', 3),
(5, '478a28e9bf096ca11be411a14be9ec9a.jpg', 4),
(6, 'e105d5ff2a99522cfb9a244a13bdc2d4.jpg', 4),
(7, '769b35f25050fffc023eceba46c3e68a.jpg', 5),
(8, '77eb1fe5d93b521966544bfa93eb4d28.jpg', 5),
(9, 'eaf74edddc1b81eea0e563e1d643aac6.jpg', 6),
(10, '5f9caeffeac6ebb218c577f8309f4152.jpg', 7);

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
(35, 'apefiieajfa', '2017-06-20', '<p>aeofaifjaoijf</p>', 'apefiieajfa2017-06-20.jpg'),
(36, 'afijeaif', '2017-06-20', '<p>aoifjioeajfaief</p><p>aofejoiafja</p><p><br></p><p>aiofjeaoifjaf</p>', 'afijeaif2017-06-20.jpg'),
(37, 'naiea', '2017-06-20', '<p>afoeanfioaenfioanfaefaf</p><p>eaf</p><p>ae</p><p>fae</p><p>fae</p><p>f</p><p>aefafafaefaefae</p><p>fafafe</p>', 'naiea2017-06-20.png'),
(38, 'oijoij', '2017-06-20', '<p>B<b>asdasdadkjasnda</b></p><p>asdadoijawd<b><br></b></p><p><b>doawijdoiajdoi</b><br></p>', 'oijoij2017-06-20.PNG');

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
(2, 'sadasd', 'sadasd.PNG'),
(3, 'aasdsad', 'aasdsad.PNG'),
(4, 'sd', 'sd.PNG'),
(5, 'garuda', 'garuda.PNG');

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
(1, '<p>GSE Building</p><p>Soekarno Hatta International Airport</p><p>Indonesia</p>', '081331525292', NULL, 'gse@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `homepage_slogan` varchar(20000) NOT NULL,
  `homepage_id` int(11) NOT NULL,
  `homepage_slogan_subtext` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`homepage_slogan`, `homepage_id`, `homepage_slogan_subtext`) VALUES
('Innovation for aviation', 12, 'Ground support equipment'),
('Bendibelt', 13, 'best and innovative');

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
-- Table structure for table `homepage_image`
--

CREATE TABLE `homepage_image` (
  `homepage_image_id` int(11) NOT NULL,
  `homepage_gambar` varchar(300) NOT NULL,
  `homepage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_image`
--

INSERT INTO `homepage_image` (`homepage_image_id`, `homepage_gambar`, `homepage_id`) VALUES
(27, '63b7330e77b04c2b5e2faebe50286f24.jpg', 12),
(28, 'f44c80ff7a23baa120696d4891488bcc.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_id`, `password`, `remember_token`) VALUES
(1, '581582', '$2y$10$J5HulRNYe07xZMmnAk37k.qpx0A4GadIUb4tor3Ai6Ed/rOpDFvVG', NULL),
(3, 'admin', '$2y$10$sJ2V8gV6/QYqoi/6ASmlCuz/liZXaApEHmwKVfCYWDejk9cs.bpYm', 'tXky0ucmyRPAHqUiYUbhlRDCAIShgaGMEp5WyiZDEVqZOwMxq9jo3O6F8OjP');

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

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_email`, `message_telephone`, `message_comment`, `message_timestamp`) VALUES
(3, 'masfiaoifj', '1092312', 'anfaewnfoanf', '2017-06-21 08:15:55');

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
(22, 'CT4000 / CCT4000', 'The Mallaghan CT4000 / CCT4000 range of highly sophisticated Catering/Cabin Cleaning Trucks are utilised for the efficient transportation of catering equipment, food supplies and cleaning equipment. Assembled on a truck mounted chassis with lifting van body and fully insulated GRP panels.io ioaejfoia', '<p></p><p><strong>Model<br></strong><strong>CT4000/CCT4000</strong><br>Sill Heights: 1300mm – 4200mm</p><p><strong>Capacity &nbsp;</strong><br>from 1000kg – 2000kg</p><p><strong>Chassis</strong><br>Standard commercial chassis<br>(Iveco, MAN, Mercedes-Benz, DAF, Volvo etc).</p><p><strong>Platform</strong><br>Available in full width, half-width and transverse options.</p><p><strong>Scissor Mechanism</strong><br>Mallaghan scissors with built-in hydraulic cylinders and four hydraulic chassis stabilisers.</p><p><strong>Van Body</strong><br>Insulated G.R.P panels from 30mm – 50mm.</p><p><strong>Electric System</strong><br>24v relay or PLC computer.</p><p><strong>Typical Options</strong><br>• Gas Powered<br>• Tail-lift<br>• Refrigeration<br>• Automatic gearbox</p><p><strong>Additional  Options</strong><br>Available upon request.</p><p></p>', 4),
(24, 'Deicers', 'The Mallaghan Deicer range of equipment has been designed to surpass the expectations and needs of customers in terms of mobile deicing and anti-icing of all aircraft types.  This European manufactured ‘state of the art’ Deicer been specifically designed so as to ensure high levels of efficiency, reliability and ease of use in a safe and busy airport environment.', '<p>\r\n\r\n</p><div><div><div><div><div><div><p><strong>Model / Typical Capacity</strong><br><strong>TA4500</strong><br>3600 litre pre-mix<br>900 litre anti-ice</p><p><strong>TA8200</strong><br>7000 litre pre-mix<br>1200 litre ant-ice</p><p><strong>Chassis</strong><br>Standard commercial chassis of European or US manufacture. Driver’s cab full roof window with wipe/wash</p><p><strong>Standard Features</strong><br>• Automotive fire suppression system.<br>• Basket communication intercom system</p><p><strong>Fluid Tanks</strong><br>• Stainless steel construction<br>• Internal multipoint return flow for  improved mixing<br>• High grade insulation fitted to the heated premix deicing fluid tank<br>• Both tanks including the Anti-ice Tank have external fluid level gauges</p><p><strong>Fluid Circulation &amp; Delivery</strong><br>• Hardi Pumps deliver the heated fluid up to 200 LPM<br>• Anti-ice flow adjustable from 75LPM to 200LPM</p><p><strong>Boom / Basket</strong><br>• Open or enclosed basket options<br>• Working height up to 17m.<br>• Proportional control fitted for smooth operation<br>• Main Boom Rotation 270°<br>• Basket Rotation 180° (Optional)</p><p><strong>Typical Options</strong><br>• Proportional mixing system<br>• Forced Air System</p><p><strong>Additional Options</strong><br>Available upon request</p><div></div></div></div></div></div></div></div><div></div><div><div><br>\r\n\r\n</div></div><br><p></p>', 1);

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
(57, 22, '2c85b2b9283d14febe65363becd37dc175aa0ad5.PNG'),
(61, 22, 'cdae419fc58e5cba42f10e499e4b03cf94399f38.PNG'),
(62, 24, 'Deicers0.jpg');

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
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviews_id`, `reviews_name`, `reviews_title`, `reviews_description`, `reviews_product_id`) VALUES
(1, 'bim', 'jelek', 'gampang ruska', 24);

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
-- Indexes for table `homepage_image`
--
ALTER TABLE `homepage_image`
  ADD PRIMARY KEY (`homepage_image_id`),
  ADD KEY `homepage_id` (`homepage_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

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
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  MODIFY `asi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `homepage_customer`
--
ALTER TABLE `homepage_customer`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homepage_image`
--
ALTER TABLE `homepage_image`
  MODIFY `homepage_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  ADD CONSTRAINT `after_sales_image_ibfk_1` FOREIGN KEY (`as_id`) REFERENCES `after_sales` (`as_id`) ON DELETE CASCADE;

--
-- Constraints for table `homepage_image`
--
ALTER TABLE `homepage_image`
  ADD CONSTRAINT `homepage_image_ibfk_1` FOREIGN KEY (`homepage_id`) REFERENCES `homepage` (`homepage_id`) ON DELETE CASCADE;

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
