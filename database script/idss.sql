-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2017 at 02:36 PM
-- Server version: 5.6.26
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_tasks`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_tasks` (
  `id` int(10) unsigned NOT NULL,
  `admin_task_name` varchar(45) NOT NULL,
  `admin_task_link` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_tasks`
--

INSERT INTO `tbl_admin_tasks` (`id`, `admin_task_name`, `admin_task_link`) VALUES
(1, 'Get Place Coordinate', 'get_place_coord.php'),
(2, 'Insert Coord-Place', 'insert_coord_place.php'),
(3, 'Insert Place-Field(s)', 'insert_place-field.php'),
(4, 'Insert Field-Project(s)', 'insert_field-projects.php');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_fields` (
  `field_id` int(10) unsigned NOT NULL,
  `icon_path` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fields`
--

INSERT INTO `tbl_fields` (`field_id`, `icon_path`, `name`, `contact`) VALUES
(1, './images/tree2.GIF', 'Agriculture', NULL),
(2, './images/Suez.GIF', 'Suez', NULL),
(3, './images/energy1.GIF', 'Energy', NULL),
(4, './images/education1.GIF', 'Education', NULL),
(5, './images/Industrial2.GIF', 'Industry', NULL),
(6, './images/Ankh.GIF', 'Tourism', NULL),
(7, './images/heart2.GIF', 'Health', NULL),
(8, './images/sec1.GIF', 'Security', NULL),
(9, './images/many.GIF', 'Other', NULL),
(10, './images/stock1.GIF', 'Stock', NULL),
(11, './images/card.GIF', 'Trade', NULL),
(12, './images/it2.GIF', 'IT-InformationTechnology', NULL),
(13, './images/build.GIF', 'Building&Construction', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_field_projects` (
  `id` int(10) unsigned NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `project_desc` varchar(300) NOT NULL,
  `field_name` varchar(45) NOT NULL,
  `prj_img_path` varchar(45) NOT NULL,
  `budget_avg` int(10) unsigned NOT NULL,
  `place_name` varchar(45) NOT NULL,
  `risk_effect` decimal(10,0) DEFAULT NULL,
  `risk_desc` varchar(100) DEFAULT NULL,
  `risk_overcome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_projects`
--

INSERT INTO `tbl_field_projects` (`id`, `project_name`, `project_desc`, `field_name`, `prj_img_path`, `budget_avg`, `place_name`, `risk_effect`, `risk_desc`, `risk_overcome`) VALUES
(8, 'High_dam', 'get electric energy and distribute it instead of these bad companies', 'Energy', './images/projects/Energy2.GIF', 12000, 'Aswan', NULL, NULL, NULL),
(9, 'High_dam2', 'get electric energy and distribute it instead of these bad companies', 'Energy', './images/projects/energy2.GIF', 12000, 'Aswan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE IF NOT EXISTS `tbl_place` (
  `place_id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `row` int(10) unsigned NOT NULL,
  `col` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `name`, `row`, `col`) VALUES
(35, 'Alexandria', 2, 9),
(36, 'Aswan', 17, 14),
(37, 'ShiekhZayed', 4, 9),
(38, 'Hurghada1', 9, 15),
(39, 'Hurghada2', 10, 15),
(40, 'Hurghada3', 11, 16),
(41, 'Sallum', 1, 1),
(42, 'Western_Sahara', 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_place_fields` (
  `id` int(10) unsigned NOT NULL,
  `place_name` varchar(45) NOT NULL,
  `field_name` varchar(45) NOT NULL,
  `field_place_opportunity_desc` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place_fields`
--

INSERT INTO `tbl_place_fields` (`id`, `place_name`, `field_name`, `field_place_opportunity_desc`) VALUES
(47, 'Alexandria', 'health', NULL),
(48, 'Alexandria', 'health', NULL),
(49, 'Aswan', 'Energy', 'athiobia is threteneing us'),
(50, 'Aswan', 'Energy', 'this is a risky point'),
(51, 'Aswan', 'Energy', 'opportunity eh elly gay tedawar 3leh'),
(52, 'Alexandria', 'Health', 'fresh air, goodgood view '),
(53, 'ShiekhZayed', 'IT-InformationTechnology', 'Zowail City invest by sharing in fund'),
(54, 'Hurghada1', 'Tourism', 'Wonderful Views'),
(55, 'Hurghada2', 'Tourism', 'Wonderful Views2'),
(56, 'Hurghada3', 'Tourism', 'Wonderful Views3'),
(57, 'Sallum', 'Trade', 'sell simple tiny things to libia'),
(58, 'Hurghada2', 'Trade', 'sell things to tourists'),
(59, 'Western_Sahara', 'Energy', 'Solar Energy Researches'),
(60, 'Western_Sahara', 'Agriculture', 'opportunity to plant the desert ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_owners`
--

CREATE TABLE IF NOT EXISTS `tbl_project_owners` (
  `id` int(10) unsigned NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `owner_name` varchar(45) NOT NULL,
  `fund_share` decimal(10,0) NOT NULL,
  `contact_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_tasks`
--
ALTER TABLE `tbl_admin_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `tbl_field_projects`
--
ALTER TABLE `tbl_field_projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_name` (`project_name`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_place_fields`
--
ALTER TABLE `tbl_place_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_owners`
--
ALTER TABLE `tbl_project_owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_tasks`
--
ALTER TABLE `tbl_admin_tasks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_fields`
--
ALTER TABLE `tbl_fields`
  MODIFY `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_field_projects`
--
ALTER TABLE `tbl_field_projects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_place_fields`
--
ALTER TABLE `tbl_place_fields`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_project_owners`
--
ALTER TABLE `tbl_project_owners`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
