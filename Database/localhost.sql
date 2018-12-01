-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2018 at 06:26 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--
CREATE DATABASE `company` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `company`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Employee_id` int(10) DEFAULT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Month` varchar(10) DEFAULT NULL,
  `Present` bigint(4) DEFAULT NULL,
  `Absent` bigint(4) DEFAULT NULL,
  `Type_of_Leave` varchar(20) DEFAULT NULL,
  `Leaves_Left` bigint(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Employee_id`, `First_name`, `Last_Name`, `Month`, `Present`, `Absent`, `Type_of_Leave`, `Leaves_Left`) VALUES
(123456, 'Gurleen', 'khanna', '28-12-1995', 10, 2, 'Sick Leave', 1),
(1, 'Gurleen', 'khanna', 'december', 20, 5, 'Sick Leave', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `First_name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `E_mail` varchar(50) DEFAULT NULL,
  `Comments` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--


-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Dept_id` int(10) NOT NULL,
  `Employee_id` int(10) DEFAULT NULL,
  `Dept_Name` varchar(50) DEFAULT NULL,
  `D_Manager` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Dept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_id`, `Employee_id`, `Dept_Name`, `D_Manager`) VALUES
(12, 1, 'IT', 'Vikas');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `Employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `D_O_J` date DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Qualification` varchar(30) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `State` varchar(15) DEFAULT NULL,
  `Contact` bigint(10) DEFAULT NULL,
  `E_mail` varchar(20) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Employee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12334568 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Employee_id`, `First_name`, `Last_Name`, `Gender`, `D_O_J`, `Address`, `Qualification`, `Designation`, `Experience`, `State`, `Contact`, `E_mail`, `Password`) VALUES
(1, 'Gurleen', 'khanna', 'female', '1995-02-02', '10/52 subhash nagar ,front sid', 'student', 'computer', '1', 'new delhi', 1234567890, 'gurleen@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `First_name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `E_mail` varchar(50) DEFAULT NULL,
  `Comments` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `Project_id` int(10) NOT NULL,
  `Employee_id` int(10) DEFAULT NULL,
  `Name_of_Project` varchar(50) DEFAULT NULL,
  `P_Manager` varchar(25) DEFAULT NULL,
  `Deadline` date DEFAULT NULL,
  PRIMARY KEY (`Project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_id`, `Employee_id`, `Name_of_Project`, `P_Manager`, `Deadline`) VALUES
(12, 1, 'light Energy', 'Vikas Gupta', '2018-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `Employee_id` int(10) DEFAULT NULL,
  `First_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `Salary` bigint(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Employee_id`, `First_name`, `Last_name`, `Salary`) VALUES
(123456, 'Gurleen', 'khanna', 25000),
(1, 'Gurleen', 'khanna', 20000);
