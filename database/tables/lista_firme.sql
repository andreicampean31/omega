-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 09:00 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omegagroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `lista_firme`
--

CREATE TABLE `lista_firme` (
  `id` int(11) NOT NULL,
  `firma` varchar(500) NOT NULL,
  `cif` varchar(500) NOT NULL,
  `nr_inm_reg_com` varchar(500) NOT NULL,
  `localitate` varchar(500) NOT NULL,
  `strada` varchar(500) NOT NULL,
  `nr` varchar(128) DEFAULT NULL,
  `judet` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lista_firme`
--

INSERT INTO `lista_firme` (`id`, `firma`, `cif`, `nr_inm_reg_com`, `localitate`, `strada`, `nr`, `judet`) VALUES
(1, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', '3', 'ARAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista_firme`
--
ALTER TABLE `lista_firme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_firme`
--
ALTER TABLE `lista_firme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
