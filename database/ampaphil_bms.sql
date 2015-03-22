-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 08:21 AM
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
  `app_lname` varchar(45) NOT NULL,
  `app_fname` varchar(45) NOT NULL,
  `app_mname` varchar(45) DEFAULT NULL,
  `app_gender` varchar(10) NOT NULL,
  `app_bdate` date NOT NULL,
  `app_blkno` varchar(10) NOT NULL,
  `app_street` varchar(45) NOT NULL,
  `app_brgy` varchar(45) NOT NULL,
  `app_city` varchar(45) NOT NULL,
  `app_zipcode` int(11) DEFAULT NULL,
  `app_contactno` varchar(20) NOT NULL,
  `app_emailadd` varchar(45) DEFAULT NULL,
  `app_regdate` date NOT NULL,
  `app_regtime` time NOT NULL,
  `app_talent` varchar(45) NOT NULL,
  `screening_sched_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_APPLICANT_SCREENING_SCHED1` (`screening_sched_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_lname` varchar(45) NOT NULL,
  `client_fname` varchar(45) NOT NULL,
  `client_mname` varchar(45) DEFAULT NULL,
  `client_company` varchar(45) DEFAULT NULL,
  `client_companyblkno` varchar(10) NOT NULL,
  `client_companybrgy` varchar(45) NOT NULL,
  `client_contactno` varchar(20) NOT NULL,
  `client_companycity` varchar(45) NOT NULL,
  `client_emailadd` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_lname` varchar(45) NOT NULL,
  `emp_fname` varchar(45) NOT NULL,
  `emp_mname` varchar(45) DEFAULT NULL,
  `emp_gender` varchar(10) NOT NULL,
  `emp_bdate` date NOT NULL,
  `emp_blkno` varchar(10) NOT NULL,
  `emp_street` varchar(45) DEFAULT NULL,
  `emp_brgy` varchar(45) DEFAULT NULL,
  `emp_city` varchar(45) DEFAULT NULL,
  `emp_zipcode` int(11) DEFAULT NULL,
  `emp_contactno` varchar(20) NOT NULL,
  `emp_emailadd` varchar(45) NOT NULL,
  `emp_position` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talent_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `event_details_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`talent_id`,`manager_id`,`event_details_id`,`client_id`),
  KEY `fk_TALENT_has_EVENTS_DETAILS_TALENT1` (`talent_id`,`manager_id`),
  KEY `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` (`event_details_id`),
  KEY `fk_EVENT_CLIENT1` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(45) NOT NULL,
  `event_location` varchar(45) NOT NULL,
  `event_type` varchar(45) NOT NULL,
  `event_startdate` date NOT NULL,
  `event_enddate` date NOT NULL,
  `event_starttime` time NOT NULL,
  `event_endtime` time NOT NULL,
  `event_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mgr_lname` varchar(45) NOT NULL,
  `mgr_fname` varchar(45) NOT NULL,
  `mgr_mname` varchar(45) DEFAULT NULL,
  `mge_gender` varchar(10) NOT NULL,
  `mgr_bdate` date NOT NULL,
  `mgr_blkno` varchar(10) NOT NULL,
  `mgr_street` varchar(45) NOT NULL,
  `mgr_brgy` varchar(45) NOT NULL,
  `mgr_city` varchar(45) NOT NULL,
  `mgr_zipcode` int(11) DEFAULT NULL,
  `mgr_contactno` varchar(20) NOT NULL,
  `mgr_emailadd` varchar(45) NOT NULL,
  `mgr_expertise` varchar(20) NOT NULL,
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
('m000000_000000_base', 1427001790),
('m130524_201442_init', 1427001792);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payments_date` date NOT NULL,
  `payments_time` time NOT NULL,
  `rate` double NOT NULL,
  `talent_share` double NOT NULL,
  `agency_share` double NOT NULL,
  `event_details_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_PAYMENTS_EVENT_DETAILS1_idx` (`event_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screening_sched`
--

CREATE TABLE IF NOT EXISTS `screening_sched` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scr_date` date NOT NULL,
  `scr_time` time NOT NULL,
  `app_status` varchar(10) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_SCREENING_SCHED_EMPLOYEE1` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_id` int(11) NOT NULL,
  `talent_managedstartdate` date NOT NULL,
  `talent_managedenddate` date NOT NULL,
  `screening_sched_id` int(11) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`manager_id`),
  KEY `fk_TALENT_MANAGER1` (`manager_id`),
  KEY `fk_TALENT_SCREENING_SCHED1` (`screening_sched_id`),
  KEY `fk_TALENT_APPLICANT1` (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `talent_line`
--

CREATE TABLE IF NOT EXISTS `talent_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talent_type` varchar(45) NOT NULL,
  `talent_specialization` varchar(45) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_TALENT_LINE_APPLICANT1` (`applicant_id`)
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
(1, 'admin', 'oCOfLic01BMWQUrv94ICwRtJU9bfYvCI', '$2y$13$kG0nUpc13/oy/9Gnn3IvB.2DIF3wt4z2nDNPdiHvM6B11LnA7ANtC', NULL, 'admin@ampaphil.com', 10, 1427001858, 1427001858);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `fk_APPLICANT_SCREENING_SCHED1` FOREIGN KEY (`screening_sched_id`) REFERENCES `screening_sched` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_TALENT1` FOREIGN KEY (`talent_id`, `manager_id`) REFERENCES `talent` (`id`, `manager_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` FOREIGN KEY (`event_details_id`) REFERENCES `event_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EVENT_CLIENT1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_PAYMENTS_EVENT_DETAILS1` FOREIGN KEY (`event_details_id`) REFERENCES `event_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `screening_sched`
--
ALTER TABLE `screening_sched`
  ADD CONSTRAINT `fk_SCREENING_SCHED_EMPLOYEE1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `talent`
--
ALTER TABLE `talent`
  ADD CONSTRAINT `fk_TALENT_MANAGER1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_SCREENING_SCHED1` FOREIGN KEY (`screening_sched_id`) REFERENCES `screening_sched` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TALENT_APPLICANT1` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `talent_line`
--
ALTER TABLE `talent_line`
  ADD CONSTRAINT `fk_TALENT_LINE_APPLICANT1` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
