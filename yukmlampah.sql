-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 06:43 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yukmlampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesantravel`
--

CREATE TABLE IF NOT EXISTS `pesantravel` (
  `ID` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `orang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesantravel`
--

INSERT INTO `pesantravel` (`ID`, `nama`, `alamat`, `tujuan`, `tanggal`, `orang`) VALUES
('15', 'udin', 'ngablak', 'Bromo-Malang', '2016-04-01', 6),
('15', 'udin', 'ngablak', 'Bromo-Malang', '2016-04-01', 6),
('15', 'udin', 'ngablak', 'Bromo-Malang', '2016-04-01', 6),
('15', 'udin', 'ngablak', 'Bromo-Malang', '2016-04-01', 6),
('15', 'udin', 'ngablak', 'Bromo-Malang', '2016-04-01', 6);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `level`) VALUES
('12', '12', 'user'),
('14', '14', 'admin'),
('77', '77', 'admin'),
('udin', 'udin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
