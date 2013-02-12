-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2013 at 12:52 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `SkillLevel` varchar(20) NOT NULL,
  `imagelocation` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `FirstName`, `LastName`, `UserID`, `Pass`, `SkillLevel`, `imagelocation`) VALUES
(1, 'Jake ', 'Wilmes', 'jakewilmes@hotmail.com', '25sierra', 'Advanced', 'avatars/.181714_1583480428931_2236472_n.jpg'),
(2, 'Martin', 'Lau', 'mlau@missouriwestern.edu', '12345', 'Elementary', ''),
(3, 'Jeff ', 'Robinson', 'jrobinson23@missouriwestern.edu', '12345', 'Advanced', ''),
(4, 'Kenton', 'Miller', 'kmiller@missouriwestern.edu', '12345', 'Elementary', '');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_rep_accomp`
--

CREATE TABLE IF NOT EXISTS `subtbl_rep_accomp` (
  `Acc_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Accomp Type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Acc_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subtbl_rep_accomp`
--

INSERT INTO `subtbl_rep_accomp` (`Acc_ID`, `Accomp Type`) VALUES
(1, 'A Cappella'),
(2, 'Keyboard'),
(3, 'Other Instruments'),
(4, 'Electronic Tape/CD'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_rep_language`
--

CREATE TABLE IF NOT EXISTS `subtbl_rep_language` (
  `Language_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Language` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Language_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `subtbl_rep_language`
--

INSERT INTO `subtbl_rep_language` (`Language_ID`, `Language`) VALUES
(1, 'English'),
(2, 'French'),
(3, 'German'),
(4, 'Italian'),
(5, 'Hebrew'),
(6, 'Latin'),
(7, 'Spanish'),
(8, 'Russian'),
(9, 'Japanese'),
(10, 'Korean'),
(11, 'Slovic'),
(12, 'Hungarian'),
(13, 'Portugese'),
(14, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_rep_skill`
--

CREATE TABLE IF NOT EXISTS `subtbl_rep_skill` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Skill_Level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subtbl_rep_skill`
--

INSERT INTO `subtbl_rep_skill` (`ID`, `Skill_Level`) VALUES
(1, 'Elementary'),
(2, 'Middle/Junior High'),
(3, 'High School'),
(4, 'University'),
(5, 'Advanced');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_rep_style_genre`
--

CREATE TABLE IF NOT EXISTS `subtbl_rep_style_genre` (
  `Style_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Style_Genre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Style_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `subtbl_rep_style_genre`
--

INSERT INTO `subtbl_rep_style_genre` (`Style_ID`, `Style_Genre`) VALUES
(1, 'Pre-Renaissance'),
(2, 'Renaissance'),
(3, 'Baroque'),
(4, 'Classical'),
(5, 'Romantic'),
(6, 'Twentieth Century'),
(7, 'Contemporary'),
(8, 'Jazz'),
(9, 'Pop'),
(10, 'Broadway'),
(11, 'Folk Song'),
(12, 'Spiritual'),
(13, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_rep_voicing`
--

CREATE TABLE IF NOT EXISTS `subtbl_rep_voicing` (
  `Voicing_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Voicing` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Voicing_ID`),
  KEY `Voicing_ID` (`Voicing_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `subtbl_rep_voicing`
--

INSERT INTO `subtbl_rep_voicing` (`Voicing_ID`, `Voicing`) VALUES
(1, 'SATB'),
(2, 'SATB div.'),
(3, 'SSA'),
(4, 'SSAA'),
(5, 'TTBB'),
(6, 'TTB'),
(7, 'SAB'),
(8, 'SATB w/ solo'),
(9, 'Unison'),
(10, 'SA'),
(11, 'TB'),
(12, 'Two-Part');

-- --------------------------------------------------------

--
-- Table structure for table `subtbl_text_type`
--

CREATE TABLE IF NOT EXISTS `subtbl_text_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Text_Type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subtbl_text_type`
--

INSERT INTO `subtbl_text_type` (`ID`, `Text_Type`) VALUES
(1, 'Sacred'),
(2, 'Secular'),
(3, 'Mixed (Poly-Textural)'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conductors`
--

CREATE TABLE IF NOT EXISTS `tbl_conductors` (
  `COND_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Last Name` varchar(255) DEFAULT NULL,
  `First Name` varchar(255) DEFAULT NULL,
  `Middle Initial` varchar(255) DEFAULT NULL,
  `Current e-mail` varchar(255) DEFAULT NULL,
  `Current phone` varchar(255) DEFAULT NULL,
  `Current Address 1` varchar(255) DEFAULT NULL,
  `Current Address 2` varchar(255) DEFAULT NULL,
  `Current City` varchar(255) DEFAULT NULL,
  `Current State` varchar(255) DEFAULT NULL,
  `Current Zip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`COND_ID`),
  KEY `COND_ID` (`COND_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ensembles`
--

CREATE TABLE IF NOT EXISTS `tbl_ensembles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ensemble_ID` int(11) DEFAULT NULL,
  `Ensemble Name` varchar(255) DEFAULT NULL,
  `Voicing` varchar(255) DEFAULT NULL,
  `Size` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Ensemble Level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institution/organization`
--

CREATE TABLE IF NOT EXISTS `tbl_institution/organization` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Institution_ID` int(11) DEFAULT NULL,
  `Institution Name` varchar(255) DEFAULT NULL,
  `Address 1` varchar(255) DEFAULT NULL,
  `Address 2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Zip` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performances`
--

CREATE TABLE IF NOT EXISTS `tbl_performances` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Performance_ID` int(11) DEFAULT NULL,
  `Start Date` datetime DEFAULT NULL,
  `End Date` datetime DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Audience` varchar(255) DEFAULT NULL,
  `Cost` varchar(255) DEFAULT NULL,
  `Numbers attended` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_repertiore`
--

CREATE TABLE IF NOT EXISTS `tbl_repertiore` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `REP_ID` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Composer` varchar(255) DEFAULT NULL,
  `Comp_Birth_Year` varchar(255) DEFAULT NULL,
  `Comp_Death_Year` varchar(255) DEFAULT NULL,
  `Arranger` varchar(255) DEFAULT NULL,
  `Arr_Birth_Year` varchar(255) DEFAULT NULL,
  `Arr_Death_Year` varchar(255) DEFAULT NULL,
  `Poet` varchar(255) DEFAULT NULL,
  `Poet_Birth_Year` varchar(255) DEFAULT NULL,
  `Poet_Death_Year` varchar(255) DEFAULT NULL,
  `Voicing` varchar(255) DEFAULT NULL,
  `Accompaniment` varchar(255) DEFAULT NULL,
  `Genre/Style` varchar(255) DEFAULT NULL,
  `Language` varchar(255) DEFAULT NULL,
  `Publisher` varchar(255) DEFAULT NULL,
  `Vendor Number` varchar(255) DEFAULT NULL,
  `Text type` varchar(255) DEFAULT NULL,
  `Currently Printed` tinyint(1) DEFAULT '0',
  `Length` varchar(255) DEFAULT NULL,
  `Skill Level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
