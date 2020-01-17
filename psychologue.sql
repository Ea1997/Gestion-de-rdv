-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2020 at 05:48 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychologue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `login`, `password`) VALUES
(1, 'ADMIN', 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `idpatient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Age` int(5) NOT NULL,
  `Profession` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Datepc` date NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Moyen` int(2) NOT NULL,
  `Anxiete` int(2) DEFAULT NULL,
  PRIMARY KEY (`idpatient`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idpatient`, `Nom`, `Prenom`, `Age`, `Profession`, `Email`, `password`, `Datepc`, `Type`, `Moyen`, `Anxiete`) VALUES
(8, 'elbouhali', 'aymen', 24, 'etudiant', 'aymen@gmail.com', '1234567890', '2020-02-02', 'enfant', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `rdvid` int(11) NOT NULL AUTO_INCREMENT,
  `daterdv` date NOT NULL,
  `timerdv` time NOT NULL,
  `timerdv1` time NOT NULL,
  `idpatient` int(11) DEFAULT NULL,
  PRIMARY KEY (`rdvid`),
  KEY `idpatient` (`idpatient`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`rdvid`, `daterdv`, `timerdv`, `timerdv1`, `idpatient`) VALUES
(1, '2020-01-26', '08:00:00', '09:00:00', 8),
(2, '2020-01-10', '08:00:00', '09:00:00', 8),
(3, '2020-03-05', '06:00:00', '07:00:00', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
