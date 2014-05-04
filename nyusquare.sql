-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2014 at 04:05 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nyusquare`
--
CREATE DATABASE IF NOT EXISTS `nyusquare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nyusquare`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eID` int(11) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(100) NOT NULL,
  `eventTime` time NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(100) NOT NULL,
  `eventLong` varchar(25) NOT NULL,
  `eventLat` varchar(25) NOT NULL,
  `eventDescription` text,
  `privacyIndicator` int(1) NOT NULL,
  `pictureURL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`eID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `events`
--

TRUNCATE TABLE `events`;
--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eID`, `eventName`, `eventTime`, `eventDate`, `eventLocation`, `eventLong`, `eventLat`, `eventDescription`, `privacyIndicator`, `pictureURL`) VALUES
(1, 'String Chamber Music', '19:30:00', '2014-05-03', 'Black Box Theatre', '', '', 'Performances from the chamber music program.\r\nADMISSION: Free', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hostof`
--

DROP TABLE IF EXISTS `hostof`;
CREATE TABLE IF NOT EXISTS `hostof` (
  `uID` int(11) NOT NULL,
  `eID` int(11) NOT NULL,
  PRIMARY KEY (`eID`,`uID`),
  KEY `uID` (`uID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `hostof`
--

TRUNCATE TABLE `hostof`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `email`, `pass`, `firstName`, `lastName`) VALUES
(1, 'user1@aol.com', 'b4af804009cb036a4ccdc33431ef9ac9', 'Dawid', 'Kostek'),
(2, 'user2@aol.com', 'b4af804009cb036a4ccdc33431ef9ac9', 'Wayne', 'Jones'),
(3, 'user3@aol.com', 'b4af804009cb036a4ccdc33431ef9ac9', 'Martin', 'Sosa'),
(4, 'user4@aol.com', 'b4af804009cb036a4ccdc33431ef9ac9', 'Gene', 'Lee');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hostof`
--
ALTER TABLE `hostof`
  ADD CONSTRAINT `hostof_ibfk_2` FOREIGN KEY (`eID`) REFERENCES `events` (`eID`),
  ADD CONSTRAINT `hostof_ibfk_1` FOREIGN KEY (`uID`) REFERENCES `users` (`uID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
