-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2016 at 11:41 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lilin`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `artikelID` int(255) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` longtext NOT NULL,
  `postdate` date NOT NULL,
  PRIMARY KEY (`artikelID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `userID` int(255) NOT NULL,
  `sms` int(255) NOT NULL,
  `matematika` varchar(100) NOT NULL,
  `fisika_geo` varchar(100) NOT NULL,
  `biologi_sosio` varchar(100) NOT NULL,
  `kimia_eko` varchar(100) NOT NULL,
  `matematika_sejarah` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pkn` varchar(100) NOT NULL,
  `indo` varchar(100) NOT NULL,
  `inggris` varchar(100) NOT NULL,
  `sejarah` varchar(100) NOT NULL,
  `pjok` varchar(100) NOT NULL,
  `jepang` varchar(100) NOT NULL,
  `arab` varchar(100) NOT NULL,
  `sunda` varchar(100) NOT NULL,
  `seni` varchar(100) NOT NULL,
  `prakarya` varchar(100) NOT NULL,
  `matkul1` varchar(100) NOT NULL,
  `matkul2` varchar(100) NOT NULL,
  `rata` varchar(100) NOT NULL,
  `wajib` varchar(100) NOT NULL,
  `semua` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID`, `userID`, `sms`, `matematika`, `fisika_geo`, `biologi_sosio`, `kimia_eko`, `matematika_sejarah`, `agama`, `pkn`, `indo`, `inggris`, `sejarah`, `pjok`, `jepang`, `arab`, `sunda`, `seni`, `prakarya`, `matkul1`, `matkul2`, `rata`, `wajib`, `semua`) VALUES
(32, 2, 1, '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '3.2', '', '', '', '3.2', '3.2', '', '', '3.2', '', ''),
(33, 2, 2, '4', '4', '4', '4', '4', '3', '4', '4', '4', '4', '4', '', '', '', '4', '4', '', '', '3.9230769230769', '', ''),
(34, 2, 3, '1', '3', '3', '3', '3', '4', '4', '4', '3', '3', '3.2', '', '', '', '3', '3', '', '', '3.0923076923077', '', ''),
(35, 2, 4, '3', '4', '4', '4', '4', '3', '3', '3', '1', '2', '4', '', '', '', '2', '4', '', '', '3.1538461538462', '', ''),
(36, 2, 5, '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '', '', '', '4', '4', '', '', '4', '', ''),
(38, 5, 1, '3', '2', '2', '3', '3', '2', '2', '2', '3', '2', '3', '', '', '', '2', '2', '', '', '2.3846153846154', '', ''),
(39, 5, 2, '2', '3', '3', '2', '2', '3', '2', '3', '2', '3', '2', '', '', '', '3', '3', '', '', '2.5384615384615', '', ''),
(40, 5, 3, '2', '3', '3', '2', '2', '3', '2', '3', '2', '3', '2', '', '', '', '3', '3', '', '', '2.5384615384615', '', ''),
(41, 5, 4, '3', '4', '4', '3', '3', '4', '3', '4', '3', '4', '3', '', '', '', '4', '4', '', '', '3.5384615384615', '', ''),
(42, 5, 5, '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '', '', '', '4', '4', '', '', '4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE IF NOT EXISTS `pt` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `userID` int(255) NOT NULL,
  `pilihan` int(255) NOT NULL,
  `univ` text NOT NULL,
  `jurusan` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`ID`, `userID`, `pilihan`, `univ`, `jurusan`) VALUES
(5, 5, 1, 'ITB', 'HUKUM'),
(6, 5, 2, 'ITB', 'DOKTER'),
(7, 5, 3, 'ITB', 'AKUNTANSI'),
(8, 2, 1, 'ITB', 'ELEKTRO'),
(9, 2, 2, 'ITB', 'DOKTER'),
(10, 2, 3, 'ITB', 'HUKUM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `sekolah` text NOT NULL,
  `kelas` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `status` int(10) NOT NULL,
  `email` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `kurikulum` text NOT NULL,
  `nisn` int(255) NOT NULL,
  `input` int(255) NOT NULL,
  `ratanilaisemua` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `name`, `username`, `password`, `sekolah`, `kelas`, `kota`, `provinsi`, `status`, `email`, `tempat_lahir`, `tanggal_lahir`, `kurikulum`, `nisn`, `input`, `ratanilaisemua`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'SMAN 1 Cibadak', 'IPA', 'Sukabumi', 'Jawa Barat', 2, '', '', '', '', 0, 0, ''),
(2, 'User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'SMAN 1 Cibadak', 'IPA', 'Sukabumi', 'Jawa Barat', 1, '', '', '', '', 0, 1, '3.4738461538462'),
(5, 'dsdsd', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'sddsd', 'XI', '1', '3', 1, 'coba@dsd', 'csc', '23 August, 2016', 'k13', 133535, 0, '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
