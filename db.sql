-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 12:18 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `botique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `phone`, `email`, `username`, `password`) VALUES
(1, 'musembya', 'musembya', '834894894', 'alphamezziah@ymail.com', 'musembya', '21d022f803fa877f7ba54c352b2d692f'),
(2, 'kluz', 'KLuz', '00988777', 'alankluz39em@yahoo.com', 'kluz', '66f1cf6176ee643d060c79c0323b59ed'),
(3, 'admin', 'admin', '8559-8550', 'engallanmusembya@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE IF NOT EXISTS `dresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botique_name` varchar(50) NOT NULL,
  `botique_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id`, `botique_name`, `botique_image`, `image`, `details`) VALUES
(7, 'Hey am allan doing my thing', '../images/chelsea.png', '../images/IMG_20140324_010932.jpg', '<p>Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5</p>\r\n'),
(8, 'xPosed Desingners Botique', '../images/chelsea.png', '../images/IMG_20140312_213101.jpg', 'Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5.\r\n'),
(10, 'Loving my new app', '../images/IMG_20140402_014458.jpg', '../images/IMG_20140402_014458.jpg', 'Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5\r\n'),
(11, 'xPosed Desingners Botique', '../images/IMG_20140403_224157.jpg', '../images/allan.jpg', 'eVisionAVR (CVAVR) is the C-program language compiler that shall be used to program theMCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler Integrated Development Environment\r\n'),
(12, 'xPosed Desingners Botique', '../images/IMG_20140403_224157.jpg', '../images/allan.jpg', 'eVisionAVR (CVAVR) is the C-program language compiler that shall be used to program theMCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler Integrated Development Environment\r\n'),
(13, 'xPosed Desingners Botique', '../images/IMG_20140403_224157.jpg', '../images/allan.jpg', 'eVisionAVR (CVAVR) is the C-program language compiler that shall be used to program theMCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler Integrated Development Environment\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'musembya', '21d022f803fa877f7ba54c352'),
(2, 'kluz', '66f1cf6176ee643d060c79c03'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE IF NOT EXISTS `pants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botique_name` varchar(50) NOT NULL,
  `botique_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`id`, `botique_name`, `botique_image`, `image`, `details`) VALUES
(1, 'xPosed Desingners Botique', '../images/chelsea.png', '../images/IMG_20140421_194206.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n'),
(2, 'xPosed Desingners Botique', '../images/chelsea.png', '../images/IMG_20140421_194206.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n'),
(3, 'xPosed Desingners Botique', '../images/chelsea.png', '../images/IMG_20140421_194206.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n'),
(4, 'xPosed Desingners Botique', '../images/chelsea.png', '../images/IMG_20140421_194206.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botique_name` varchar(100) NOT NULL,
  `botique_image` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `botique_name`, `botique_image`, `image`, `details`) VALUES
(1, 'xPosed Desingners Botique', '../images/IMG_20140405_003228.jpg', '../images/IMG_20140405_003228.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &amp;ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n'),
(2, 'xPosed Desingners Botique', '../images/IMG_20140405_003228.jpg', '../images/IMG_20140405_003228.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &amp;ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n'),
(3, 'xPosed Desingners Botique', '../images/IMG_20140405_003228.jpg', '../images/IMG_20140405_003228.jpg', 'CodeVisionAVR (CVAVR) is the C-program language compiler that shall be used to program the MCU. CVAVR is a highly versatile software which offers &amp;ldquo;High Performance ANSI C Compiler, Integrated Development Environment\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tops`
--

CREATE TABLE IF NOT EXISTS `tops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botique_name` varchar(100) NOT NULL,
  `botique_image` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tops`
--

INSERT INTO `tops` (`id`, `botique_name`, `botique_image`, `image`, `details`) VALUES
(1, 'xPosed Desingners Botique', '../images/picture002.jpg', '../images/1656419_10151975348573931_1714198311_n.jpg', 'Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5.\r\n'),
(2, 'xPosed Desingners Botique', '../images/picture002.jpg', '../images/1656419_10151975348573931_1714198311_n.jpg', 'Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5.\r\n'),
(3, 'xPosed Desingners Botique', '../images/picture002.jpg', '../images/1656419_10151975348573931_1714198311_n.jpg', 'Specific to particular tags, and some are global across all tags. This chapter revisits many of the tags you might have used in earlier versions of HTML. However, you will see that these familiar tags have been greatly enhanced in HTML5.\r\n');
