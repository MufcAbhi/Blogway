-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 03:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(1, 'abhi@gmail.com', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `blogtable`
--

CREATE TABLE IF NOT EXISTS `blogtable` (
`ID` int(11) NOT NULL,
  `ImageName` varchar(1000) NOT NULL,
  `BlogTitle` varchar(100) NOT NULL,
  `Content` longtext NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogtable`
--

INSERT INTO `blogtable` (`ID`, `ImageName`, `BlogTitle`, `Content`, `Date`) VALUES
(2, '120542169135wildlifemistakes.jpg', 'ew', 'qwerqwerq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE IF NOT EXISTS `commenttable` (
`IDid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comment` longtext NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`IDid`, `Name`, `Email`, `Comment`, `ID`) VALUES
(1, 'rew', 'g@g.com', 'qwer', 1),
(2, 'e', 'g@g.com', 'e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `imagegallery`
--

CREATE TABLE IF NOT EXISTS `imagegallery` (
`ImageGalleryID` int(11) NOT NULL,
  `PictureName` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagegallery`
--

INSERT INTO `imagegallery` (`ImageGalleryID`, `PictureName`, `Category`) VALUES
(1, '929998759654banner1090835960720.jpg', 'Nature'),
(2, '84047252554811.png', 'Technology'),
(3, '333725571193howtechnologychangedphotography1.jpg', 'Technology'),
(4, '80743189463419naturephotographyforest.preview.jpg', 'Wildlife'),
(5, '75445637795017.jpg', 'Just Pics'),
(6, '99375292990162474063foxcubs.jpg', 'Wildlife'),
(7, '50100471396924.jpg', 'Nature'),
(8, '69628186878214.jpg', 'Just Pics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogtable`
--
ALTER TABLE `blogtable`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `commenttable`
--
ALTER TABLE `commenttable`
 ADD PRIMARY KEY (`IDid`);

--
-- Indexes for table `imagegallery`
--
ALTER TABLE `imagegallery`
 ADD PRIMARY KEY (`ImageGalleryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogtable`
--
ALTER TABLE `blogtable`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `commenttable`
--
ALTER TABLE `commenttable`
MODIFY `IDid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `imagegallery`
--
ALTER TABLE `imagegallery`
MODIFY `ImageGalleryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
