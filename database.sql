-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2009 at 02:42 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `aq`
--

-- --------------------------------------------------------

--
-- Table structure for table `aq_characters`
--

CREATE TABLE IF NOT EXISTS `aq_characters` (
  `ID` int(225) NOT NULL AUTO_INCREMENT,
  `charname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `level` int(3) NOT NULL,
  `CharType` varchar(25) NOT NULL,
  `intCharType` int(2) NOT NULL,
  `FaceFileName` varchar(225) NOT NULL,
  `FaceColors` varchar(225) NOT NULL,
  `LastSeen` int(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aq_characters`
--


-- --------------------------------------------------------

--
-- Table structure for table `aq_users`
--

CREATE TABLE IF NOT EXISTS `aq_users` (
  `ID` int(225) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `strEmail` int(225) NOT NULL,
  `intCanEmail` int(1) NOT NULL,
  `intHits` int(225) NOT NULL,
  `intAge` int(3) NOT NULL,
  `strCountryCode` varchar(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aq_users`
--

