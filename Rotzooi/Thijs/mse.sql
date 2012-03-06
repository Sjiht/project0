-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2012 at 02:34 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissable_cm`
--

CREATE TABLE `admissable_cm` (
  `program_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissable_cm`
--


-- --------------------------------------------------------

--
-- Table structure for table `admissable_em`
--

CREATE TABLE `admissable_em` (
  `program_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissable_em`
--


-- --------------------------------------------------------

--
-- Table structure for table `admissable_ng`
--

CREATE TABLE `admissable_ng` (
  `program_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissable_ng`
--


-- --------------------------------------------------------

--
-- Table structure for table `admissable_nt`
--

CREATE TABLE `admissable_nt` (
  `program_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissable_nt`
--


-- --------------------------------------------------------

--
-- Table structure for table `admissable_programs`
--

CREATE TABLE `admissable_programs` (
  `program_id` varchar(15) NOT NULL,
  `cm` int(1) NOT NULL,
  `em` int(1) NOT NULL,
  `ng` int(1) NOT NULL,
  `nt` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissable_programs`
--


-- --------------------------------------------------------

--
-- Table structure for table `clusters`
--

CREATE TABLE `clusters` (
  `program_id` varchar(15) NOT NULL,
  `cluster_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clusters`
--


-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `program_id` varchar(15) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `partofcurriculum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--


-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `faculty_id` varchar(5) NOT NULL,
  `faculty_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultys`
--


-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` varchar(15) NOT NULL,
  `name` varchar(150) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `faculty_id` varchar(10) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `langpercentage` int(5) NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--


-- --------------------------------------------------------

--
-- Table structure for table `program_classifications`
--

CREATE TABLE `program_classifications` (
  `program_id` varchar(15) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `financing` varchar(10) NOT NULL,
  `credits` int(3) NOT NULL,
  `duration` varchar(3) NOT NULL,
  `form` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL,
  `cluster` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_classifications`
--


-- --------------------------------------------------------

--
-- Table structure for table `program_descriptions`
--

CREATE TABLE `program_descriptions` (
  `program_id` varchar(15) NOT NULL,
  `part1` varchar(255) DEFAULT NULL,
  `part2` varchar(255) DEFAULT NULL,
  `part3` varchar(255) DEFAULT NULL,
  `part4` varchar(255) DEFAULT NULL,
  `part5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_descriptions`
--


-- --------------------------------------------------------

--
-- Table structure for table `program_links`
--

CREATE TABLE `program_links` (
  `program_id` varchar(15) NOT NULL,
  `summary1` varchar(255) DEFAULT NULL,
  `summary2` varchar(255) DEFAULT NULL,
  `summary3` varchar(255) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `weblink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_links`
--


-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `program_id` varchar(15) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

