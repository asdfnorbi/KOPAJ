-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 11:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olimpia`
--

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `username` varchar(32) NOT NULL,
  `passwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `felhasznalo`
--

INSERT INTO `felhasznalo` (`username`, `passwd`) VALUES
('user1', 'user1'),
('user2', 'user2'),
('user3', 'user3');

-- --------------------------------------------------------

--
-- Table structure for table `orszagok`
--

CREATE TABLE `orszagok` (
  `nev` varchar(32) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `versenyzok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orszagok`
--

INSERT INTO `orszagok` (`nev`, `versenyzok`) VALUES
('anglia', 51),
('canada', 49),
('franciaorszag', 40),
('görögorszag', 20),
('kolumbia', 30),
('magyarorszag', 51),
('romania', 15),
('usa', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sportagak`
--

CREATE TABLE `sportagak` (
  `valami1` varchar(32) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `valami2` varchar(32) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `valami3` varchar(32) CHARACTER SET ucs2 COLLATE ucs2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportagak`
--

INSERT INTO `sportagak` (`valami1`, `valami2`, `valami3`) VALUES
('asd', 'asd1', 'asd2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orszagok`
--
ALTER TABLE `orszagok`
  ADD PRIMARY KEY (`nev`);

--
-- Indexes for table `sportagak`
--
ALTER TABLE `sportagak`
  ADD PRIMARY KEY (`valami1`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
