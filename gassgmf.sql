-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 10:19 AM
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
(1, 'about-gmf.jpg', '<p>\r\n\r\n</p><div><p>Started out in 1949, GMF AeroAsia originated as the Technical Division of Garuda Indonesia airline and transformed into independent entity in 2002, With more than 60 years of expertise as an Aircraft Maintenance Repair and Overhaul company. As the market leader in Indonesia and the global player in MRO industry, GMF AeroAsia provides its best quality services for airlines across the world that reaches more than 60 nations in 5 continents.</p><p>GMF AeroAsia provides a wide-range aircraft maintenance services, such as Line Maintenance, Base Maintenance, Component Maintenance, Engine &amp; APU Maintenance, Cabin Maintenance, Engineering Services, Material Services, Logistic &amp; Bonded Services, Learning Services for various aircraft type such as Boeing 737, Boeing 747, Boeing 777, Airbus A320, Airbus A330, Bombardier CRJ1000, and ATR 72-600 and other outside aircraft service GMF Power Services, provides comprehensive repair and overhaul of industrial gas turbine engines. Offering an aircraft maintenance solution, GMF AeroAsia is complied with many certified authorities’ regulations, including Indonesia DGCA, United States FAA, European EASA, and many others.</p></div><br>\r\n\r\n<p></p>', 'about-gass.jpg', '<p></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<p>GMF Aircraft Support Services is the leading ground support\r\nequipment maintenance and services in terms of quality, reliability, safety,\r\ninnovation and network coverage. </p>\r\n\r\n<p></p>\r\n\r\n<p>Offering a comprehensive range of services and products, GASS is\r\nable to provide an “all-inclusive” service package in addition to managing\r\nGround Support Equipment.</p>\r\n\r\n<p></p><ul><li>&nbsp;Aircraft Maintenance Ground Handling<br></li><li>&nbsp;Maintenance Ground Support Equipment<br></li><li>&nbsp;Assembly and Fabrication Ground Support Equipment<br></li><li>&nbsp;Assembly and Maintenance ULD and Meal Trolley<br></li></ul><p></p>\r\n\r\n\r\n\r\n\r\n\r\n<p></p>', 'about-gass.jpg', '<p><b>Workshop</b></p><p>GMF Aircraft Support Service islocated at the Garuda Maintenance Facility Soekarno-Hatta Airport Cengkareng. With approximately 4000 square meters of working space on bonded area.</p><p><b>Maintenance Utility</b></p><p>GASS equipped with several equimentfor maintenance such as automatic service equipment, hydraulic pressure test, load test, calibration equipment, NDT and etc.</p><p><b>GSE Equipment Fleet</b></p><p>GASS have more than 50 motorized equipment and<br>30 non motorized equipment that ready to serve you<br>24 hours and 7 days in a week<br></p><p><b>Fabrication Workshop</b><br></p><p>GASS have complete fabrication facility which equipped with new technology and skilled labor<br></p>', 'test1.jpg', 'john doe', 'test2.png', 'jihn doe', 'test3.jpg', 'jajon doe', 'GMF Aircraft Support Services should be nominated for service of the year. GMF Aircraft Support Services is exactly what our business has been lacking', 'GMF Aircraft Support Services was the best investment I ever made. I would also like to say thank you to all your staff', 'I use GMF Aircraft Support Services often. GMF Aircraft Support Services has completely surpassed our expectations. I''m good to go. No matter where you go, GMF Aircraft Support Services is the coolest, most happening thing around!', 'CEO', 'CFO', 'CTO');

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
  `as_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `as_read` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_sales`
--

INSERT INTO `after_sales` (`as_id`, `as_company_name`, `as_contact_name`, `as_email`, `as_serial`, `as_product_type`, `as_out`, `as_description`, `as_timestamp`, `as_read`) VALUES
(6, 'Garuda Indonesia', 'mamma', 'anna@majujaya.co.id', 'afmkame3', 22, 0, 'bunyi', '2017-07-06 02:33:56', 1),
(7, 'Mallaghan GSE', 'John Doe', 'JohnDoe@yahoo.com', 'aiofa323nsjfkfa', 24, 0, 'Deicer not working', '2017-07-06 02:03:06', 1),
(8, 'Garuda Indonesia', 'Aria Bima', 'hariyosoariobimo@gmail.com', '123129faiojfea', 25, 1, 'Lift cage broken', '2017-07-06 02:08:33', 1);

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
(9, 'eaf74edddc1b81eea0e563e1d643aac6.jpg', 6),
(10, '5f9caeffeac6ebb218c577f8309f4152.jpg', 7),
(11, '93a03c9c6bd565e3522b05bc0419fccc.jpg', 8);

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
(43, 'GMF Become IATP Active Member', '2017-06-27', '<p>oiajfeioajofijaeofijai</p>', 'GMF Become IATP Active Member2017-06-27.jpg'),
(44, 'berita baru', '2017-06-29', '<p></p><p>Dari desain di atas:</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Main Menu: Pilihan</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Sub Menu: Dengan Mouse dan DenganKeybpard</p><p>1. &nbsp; &nbsp; &nbsp;Menentukan nilai identifier darimasing-masing menu</p><p>Misal:</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Pilihan, tidak punya identifierkarena dia adalah parent menu dari sub menu</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Dengan Mouse, nilai identifiernya1</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Dengan Keyboard, nilaiidentifiernya 2</p><p>2. &nbsp; &nbsp; &nbsp;Menentukan action darimasing-masing submenu</p><p>Misal: </p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Action dari menu Dengan Mouseadalah Mousenya aktif, keyboard tidak aktif</p><p>- &nbsp; &nbsp; &nbsp; &nbsp; Action dari menu Dengan Keyboardadalah Keyboard aktif, Mouse tidak Aktif</p><p>3. &nbsp; &nbsp; &nbsp;Membuat codenya</p><p>a. &nbsp; &nbsp; &nbsp;Inisialisasi menu dimasukkan difungsi main</p><br><p></p>', 'berita baru2017-06-29.jpg'),
(45, 'Writing Software Requirements Specifications', '2017-06-29', '<p></p><h2><i>by Donn LeVie, Jr.</i><br></h2><p>Here''s thescenario: You''re finishing up your latest HTML Help project...no more latenights or weekends...back to a "normal" 50-hour work week. That''swhen the development team lead strolls into your office and says she just gotyour manager''s okay for you to help the development team "put together thefunctional requirements specification template for the next majorproject." </p><p>"Awhat?" you ask with a look of semi-shock. Panic sets in. "What did Ido to deserve this? I don''t even know where to start! Maybe someone on theTECHWR-L list can help...." </p><p>For technicalwriters who haven''t had the experience of designing <i>software requirementsspecifications</i> (SRSs, also known as software functional specifications orsystem specifications) templates or even writing SRSs, they might assume thatbeing given the opportunity to do so is either a reward or punishment forsomething they did (or failed to do) on a previous project. Actually, SRSs areideal projects for technical writers to be involved with because they lay outthe foundation for the development of a new product and for the types of userdocumentation and media that will be required later in the project developmentlife cycle. It also doesn''t hurt that you''d be playing a visible role incontributing to the success of the project. </p><p>This articlewill describe what an SRS is and why it''s important, discuss how and whytechnical writers should be involved with them, and discuss the critical elementsfor writing an SRS. Although this article does not attempt to address allaspects of developing SRSs, it aims to help you determine the scope for such aproject, to provide some guidelines for writing SRSs, and to provide additionalresources. Hopefully with this information, you''ll not be asking, "Whyme?" but proclaiming "Why not me?" </p><h3>Whatis a Software Requirements Specification?</h3><p>An SRS isbasically an organization''s understanding (in writing) of a customer orpotential client''s system requirements and dependencies <i>at a particularpoint in time</i> (usually) prior to any actual design or development work.It''s a two-way insurance policy that assures that both the client and theorganization understand the other''s requirements from that perspective at a givenpoint in time. </p><p>The SRSdocument itself states in precise and explicit language those functions andcapabilities a software system (i.e., a software application, an eCommerce Website, and so on) must provide, as well as states any required constraints bywhich the system must abide. The SRS also functions as a blueprint forcompleting a project with as little cost growth as possible. The SRS is oftenreferred to as the "parent" document because all subsequent projectmanagement documents, such as design specifications, statements of work,software architecture specifications, testing and validation plans, anddocumentation plans, are related to it. </p><p>It''s importantto note that an SRS contains functional and nonfunctional requirements only; itdoesn''t offer design suggestions, possible solutions to technology or businessissues, or any other information other than what the development teamunderstands the customer''s system requirements to be. </p><p>Awell-designed, well-written SRS accomplishes four major goals: </p><ul> <li>It provides feedback to the customer. An     SRS is the customer''s assurance that the development organization     understands the issues or problems to be solved and the software behavior     necessary to address those problems. Therefore, the SRS should be written     in natural language (versus a formal language, explained later in this     article), in an unambiguous manner that may also include charts, tables,     data flow diagrams, decision tables, and so on. </li> <li>It decomposes the problem into component     parts. The simple act of writing down software requirements in a     well-designed format organizes information, places borders around the     problem, solidifies ideas, and helps break down the problem into its     component parts in an orderly fashion. </li> <li>It serves as an input to the design     specification. As mentioned previously, the SRS serves as the parent     document to subsequent documents, such as the software design     specification and statement of work. Therefore, the SRS must contain     sufficient detail in the functional system requirements so that a design     solution can be devised. </li> <li>It serves as a product validation check.     The SRS also serves as the parent document for testing and validation     strategies that will be applied to the requirements for verification. </li></ul><p>SRSs aretypically developed during the first stages of "RequirementsDevelopment," which is the initial product development phase in whichinformation is gathered about what requirements are needed--and not. Thisinformation-gathering stage can include onsite visits, questionnaires, surveys,interviews, and perhaps a return-on-investment (ROI) analysis or needs analysisof the customer or client''s current business environment. The actualspecification, then, is written after the requirements have been gathered andanalyzed. </p><br><p></p>', 'Writing Software Requirements Specifications2017-06-29.PNG'),
(47, 'Lorem Ipsum', '2017-06-29', '<p></p><h3>he standard Lorem Ipsum passage, used since the 1500s</h3><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p><h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p><h3>1914 translation by H. Rackham</h3><p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p><h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3><p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p><h3>1914 translation by H. Rackham</h3><p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p><br><p></p>', 'Lorem Ipsum2017-06-29.PNG'),
(48, 'GMF Become IATP Active Member', '2017-06-29', '<p></p><p>To expanding its network, GMF AeroAsia was applied to International Airlines Technical Pooling (IATP)as Associate Member. GMF become an active member on 1st of November 2016. IATP is a non-profit organization whose provides airlines across the world in spare parts, tools &amp; equipment sharing. Moreover, IATP connects airlines to shares their experts in AOG condition.</p><p>According to GMF’s GM Component Management, Iqbal Faraz Dasril, becoming member of IATP, GMF could get a privilege to access airlines resources at the International Station if it was an AOG condition.Furthermore, GMF expected to gain revenue from provides resources to IATP’s member at the Line Maintenance Station. “If GMF gives access, it will be periodically receiving fees,” he said.</p><p>According to Iqbal, becoming a member of IATP also open up opportunities for potential customer. Through IATP, GMF’s capabilities and capacities can be exposed among airlines across the world. yha benar</p><p></p>', 'GMF Become IATP Active Member2017-06-29.jpg');

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
(5, 'garuda', 'garuda.PNG'),
(6, 'citilink', 'citilink.PNG'),
(7, 'aerofood', 'aerofood.PNG'),
(8, 'gapura', 'gapura.PNG'),
(9, 'lion', 'lion.PNG'),
(10, 'nam', 'nam.PNG'),
(11, 'pelita', 'pelita.PNG'),
(12, 'wings', 'wings.PNG');

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
('Bendibelt', 13, 'best and innovative'),
('One of the fastest growing GSE Manufacturers Globally', 14, 'Ireland, London, Berlin, Dubai, Singapore and USA');

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
(28, 'f44c80ff7a23baa120696d4891488bcc.jpg', 13),
(29, 'ecd51b8a6435869c80a6be3224a7077b.jpg', 14);

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
(3, 'admin', '$2y$10$sJ2V8gV6/QYqoi/6ASmlCuz/liZXaApEHmwKVfCYWDejk9cs.bpYm', 'M7TkZibXFYvE9RsmhT7zL1pBlqMKi6KJIZBLNW9ukexO36eM73GmrAdnkE3H');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `manager_nama` varchar(100) NOT NULL,
  `manager_jabatan` varchar(100) NOT NULL,
  `manager_filename` varchar(200) NOT NULL,
  `manager_bio` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `manager_nama`, `manager_jabatan`, `manager_filename`, `manager_bio`) VALUES
(2, 'Ario Bimo', 'General Manager GASS', '38999a79e93f63abe01b7c0ac7d11947.png', 'Specialized in Assembly and fabrication Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s'),
(3, 'Shufly Novul Aduantu', 'General Manager GASS', '8fd488f49f49711e274c2e9ba0215447.jpg', '"Lorem ipsum dolor sit amet, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum'),
(4, 'John Doe', 'General Manager GASS', 'be89e025c949a7ee61ead062f0f527b2.jpg', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_email` varchar(1000) NOT NULL,
  `message_telephone` varchar(20) NOT NULL,
  `message_comment` varchar(50000) NOT NULL,
  `message_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message_read` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_email`, `message_telephone`, `message_comment`, `message_timestamp`, `message_read`) VALUES
(3, 'masfiaoifj', '1092312', 'anfaewnfoanf', '2017-07-06 04:02:34', 1),
(5, 'masgondi234@gmail.com', '08129394839', 'Saya mau beli onoan dimana aaaaa', '2017-07-06 03:56:14', 1),
(6, 'hariyosoariobimo@gmail.com', '08122239292', 'lagi ngantuk nih', '2017-07-06 06:19:34', 1),
(7, 'masgondi234@gmail.com', '08129392039', 'kjanfanfejk', '2017-07-06 06:20:04', 1),
(11, 'masgondi234@gmail.com', '08123039211', 'Bagus juga webnya', '2017-07-06 06:31:06', 1);

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
(24, 'Deicers', 'The Mallaghan Deicer range of equipment has been designed to surpass the expectations and needs of customers in terms of mobile deicing and anti-icing of all aircraft types.  This European manufactured ‘state of the art’ Deicer been specifically designed so as to ensure high levels of efficiency, reliability and ease of use in a safe and busy airport environment.', '<p>\r\n\r\n</p><div><div><div><div><div><div><p><strong>Model / Typical Capacity</strong><br><strong>TA4500</strong><br>3600 litre pre-mix<br>900 litre anti-ice</p><p><strong>TA8200</strong><br>7000 litre pre-mix<br>1200 litre ant-ice</p><p><strong>Chassis</strong><br>Standard commercial chassis of European or US manufacture. Driver’s cab full roof window with wipe/wash</p><p><strong>Standard Features</strong><br>• Automotive fire suppression system.<br>• Basket communication intercom system</p><p><strong>Fluid Tanks</strong><br>• Stainless steel construction<br>• Internal multipoint return flow for  improved mixing<br>• High grade insulation fitted to the heated premix deicing fluid tank<br>• Both tanks including the Anti-ice Tank have external fluid level gauges</p><p><strong>Fluid Circulation &amp; Delivery</strong><br>• Hardi Pumps deliver the heated fluid up to 200 LPM<br>• Anti-ice flow adjustable from 75LPM to 200LPM</p><p><strong>Boom / Basket</strong><br>• Open or enclosed basket options<br>• Working height up to 17m.<br>• Proportional control fitted for smooth operation<br>• Main Boom Rotation 270°<br>• Basket Rotation 180° (Optional)</p><p><strong>Typical Options</strong><br>• Proportional mixing system<br>• Forced Air System</p><p><strong>Additional Options</strong><br>Available upon request</p><div></div></div></div></div></div></div></div><div></div><div><div><br>\r\n\r\n</div></div><br><p></p>', 1),
(25, 'PRM Medical Lifts', 'The highly acclaimed Mallaghan PRM Medical Lift has been specifically designed for the safe and comfortable transport of PRM passengers to and from the aircraft.  The Mallaghan Medical Lift ensures to provide a prompt and dignified service in the most comfortable manner possible.  The range is available in self-propelled and truck mounted options.', '<p>\r\n\r\n</p><p><strong>Model / Sill Heights</strong><br><strong>Available From:</strong></p><p><strong>ML6100D Self Propelled Chassis</strong><br>1090mm – 6000mm</p><p><strong>ML4000T Truck Mounted</strong><br>1300mm – 4200mm</p><p><strong>ML6100T Truck Mounted</strong><br>1500mm – 6000mm</p><p><strong>ML6100TD Truck Mounted</strong><br>1500mm – 6000mm</p><p><strong>ML8000T Truck Mounted (A380)</strong><br>3000mm – 8200mm</p><p><strong>Typical Capacity</strong><br>6 wheelchairs, 1 stretcher.</p><p><strong>Chassis</strong><br>Standard commercial chassis (Such as Iveco, MAN, Mercedes-Benz, DAF, Volvo, Scania).</p><p><strong>Platform</strong><br>Available in full width, half-width and traverse options.</p><p><strong>Scissor Mechanism</strong><br>Mallaghan scissors with built-in hydraulic cylinders and four hydraulic chassis stabilisers.</p><p><strong>Van Body</strong><br>Insulated G.R.P panels. Tail-lift with folding safety rails</p><p><strong>Electric System</strong><br>24v relay or PLC computer.</p><p><strong>Typical Options</strong><br>• Automatic gearbox<br>• Air conditioning<br>• Medicine &amp; blanket cabinet/s<br>• Wheelchair/stretcher clamps</p><p><strong>Additional  Options</strong><br>Available upon request.</p>\r\n\r\n<br><p></p>', 1);

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
(62, 24, 'Deicers0.jpg'),
(63, 25, 'PRM Medical Lifts0.jpg'),
(64, 25, 'PRM Medical Lifts1.jpg');

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
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `after_sales_image`
--
ALTER TABLE `after_sales_image`
  MODIFY `asi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `homepage_customer`
--
ALTER TABLE `homepage_customer`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homepage_image`
--
ALTER TABLE `homepage_image`
  MODIFY `homepage_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
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
