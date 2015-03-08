-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 08:24 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ampaphil_bms`
--
CREATE DATABASE IF NOT EXISTS `ampaphil_bms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ampaphil_bms`;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `APP_LName` varchar(45) NOT NULL,
  `APP_FName` varchar(45) NOT NULL,
  `APP_MName` varchar(45) DEFAULT NULL,
  `APP_Gender` varchar(10) NOT NULL,
  `APP_BDate` date NOT NULL,
  `APP_BlkNo` varchar(10) NOT NULL,
  `APP_Street` varchar(45) NOT NULL,
  `APP_Brgy` varchar(45) NOT NULL,
  `APP_City` varchar(45) NOT NULL,
  `APP_ZipCode` int(11) DEFAULT NULL,
  `APP_ContactNo` varchar(20) NOT NULL,
  `APP_EmailAdd` varchar(45) DEFAULT NULL,
  `APP_RegDate` date NOT NULL,
  `APP_RegTime` time NOT NULL,
  `APP_Talent` varchar(45) NOT NULL,
  `SCREENING_SCHED_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_APPLICANT_SCREENING_SCHED1` (`SCREENING_SCHED_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENT_LName` varchar(45) NOT NULL,
  `CLIENT_FName` varchar(45) NOT NULL,
  `CLIENT_MName` varchar(45) DEFAULT NULL,
  `CLIENT_Company` varchar(45) DEFAULT NULL,
  `CLIENT_CompanyBlkNo` varchar(10) NOT NULL,
  `CLIENT_CompanyBrgy` varchar(45) NOT NULL,
  `CLIENT_ContactNo` varchar(20) NOT NULL,
  `CLIENT_CompanyCity` varchar(45) NOT NULL,
  `CLIENT_EmailAdd` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_LName` varchar(45) NOT NULL,
  `EMP_FName` varchar(45) NOT NULL,
  `EMP_MName` varchar(45) DEFAULT NULL,
  `EMP_Gender` varchar(10) NOT NULL,
  `EMP_BDate` date NOT NULL,
  `EMP_BlkNo` varchar(10) NOT NULL,
  `EMP_Street` varchar(45) DEFAULT NULL,
  `EMP_Brgy` varchar(45) DEFAULT NULL,
  `EMP_City` varchar(45) DEFAULT NULL,
  `EMP_ZipCode` int(11) DEFAULT NULL,
  `EMP_ContactNo` varchar(20) NOT NULL,
  `EMP_EmailAdd` varchar(45) NOT NULL,
  `EMP_Position` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TALENT_id` int(11) NOT NULL,
  `TALENT_MANAGER_id` int(11) NOT NULL,
  `EVENTS_DETAILS_id` int(11) NOT NULL,
  `CLIENT_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`TALENT_id`,`TALENT_MANAGER_id`,`EVENTS_DETAILS_id`,`CLIENT_id`),
  KEY `fk_TALENT_has_EVENTS_DETAILS_TALENT1` (`TALENT_id`,`TALENT_MANAGER_id`),
  KEY `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` (`EVENTS_DETAILS_id`),
  KEY `fk_EVENT_CLIENT1` (`CLIENT_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EVENT_Name` varchar(45) NOT NULL,
  `EVENT_Location` varchar(45) NOT NULL,
  `EVENT_Type` varchar(45) NOT NULL,
  `EVENT_DateFrom` date NOT NULL,
  `EVENT_DateTo` date NOT NULL,
  `EVENT_TimeFrom` time NOT NULL,
  `EVENT_TimeTo` time NOT NULL,
  `EVENT_Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MGR_LName` varchar(45) NOT NULL,
  `MGR_FName` varchar(45) NOT NULL,
  `MGR_MName` varchar(45) DEFAULT NULL,
  `MGR_Gender` varchar(10) NOT NULL,
  `MGR_BDate` date NOT NULL,
  `MGR_BlkNo` varchar(10) NOT NULL,
  `MGR_Street` varchar(45) NOT NULL,
  `MGR_Brgy` varchar(45) NOT NULL,
  `MGR_City` varchar(45) NOT NULL,
  `MGR_ZipCode` int(11) DEFAULT NULL,
  `MGR_ContactNo` varchar(20) NOT NULL,
  `MGR_EmailAdd` varchar(45) NOT NULL,
  `MGR_Expertise` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1425798713),
('m130524_201442_init', 1425798716);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PAYMENTS_Date` date NOT NULL,
  `PAYMENTS_Time` time NOT NULL,
  `Rate` double NOT NULL,
  `TALENT_Percentage` decimal(10,0) NOT NULL,
  `AGENCY_Percentage` decimal(10,0) NOT NULL,
  `EVENT_DETAILS_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_PAYMENTS_EVENT_DETAILS1_idx` (`EVENT_DETAILS_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screening_sched`
--

CREATE TABLE IF NOT EXISTS `screening_sched` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SCR_Date` date NOT NULL,
  `SCR_Time` time NOT NULL,
  `APP_Status` varchar(10) NOT NULL,
  `EMPLOYEE_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_SCREENING_SCHED_EMPLOYEE1` (`EMPLOYEE_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MANAGER_id` int(11) NOT NULL,
  `TALENT_ManagedStartDate` date NOT NULL,
  `TALENT_ManagedEndDate` date NOT NULL,
  `SCREENING_SCHED_id` int(11) DEFAULT NULL,
  `APPLICANT_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`MANAGER_id`),
  KEY `fk_TALENT_MANAGER1` (`MANAGER_id`),
  KEY `fk_TALENT_SCREENING_SCHED1` (`SCREENING_SCHED_id`),
  KEY `fk_TALENT_APPLICANT1` (`APPLICANT_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `talent_line`
--

CREATE TABLE IF NOT EXISTS `talent_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TALENT_Type` varchar(45) NOT NULL,
  `TALENT_Specialization` varchar(45) NOT NULL,
  `APPLICANT_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_TALENT_LINE_APPLICANT1` (`APPLICANT_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'f6ewkbMOoV8AU3tY3qXLgsR17sG1NZwh', '$2y$13$L/8JVHuRj27rAN8GD7aYyOR3Cyuux4gukFv3DZ7.CA9sMz7ZJThuS', NULL, 'admin@ampaphil.com', 10, 1425798752, 1425798752);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `fk_APPLICANT_SCREENING_SCHED1` FOREIGN KEY (`SCREENING_SCHED_id`) REFERENCES `screening_sched` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_TALENT1` FOREIGN KEY (`TALENT_id`, `TALENT_MANAGER_id`) REFERENCES `talent` (`id`, `MANAGER_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` FOREIGN KEY (`EVENTS_DETAILS_id`) REFERENCES `event_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EVENT_CLIENT1` FOREIGN KEY (`CLIENT_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_PAYMENTS_EVENT_DETAILS1` FOREIGN KEY (`EVENT_DETAILS_id`) REFERENCES `event_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `screening_sched`
--
ALTER TABLE `screening_sched`
  ADD CONSTRAINT `fk_SCREENING_SCHED_EMPLOYEE1` FOREIGN KEY (`EMPLOYEE_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `talent`
--
ALTER TABLE `talent`
  ADD CONSTRAINT `fk_TALENT_MANAGER1` FOREIGN KEY (`MANAGER_id`) REFERENCES `manager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_SCREENING_SCHED1` FOREIGN KEY (`SCREENING_SCHED_id`) REFERENCES `screening_sched` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_APPLICANT1` FOREIGN KEY (`APPLICANT_id`) REFERENCES `applicant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `talent_line`
--
ALTER TABLE `talent_line`
  ADD CONSTRAINT `fk_TALENT_LINE_APPLICANT1` FOREIGN KEY (`APPLICANT_id`) REFERENCES `applicant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
