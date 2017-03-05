-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 11:08 
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
-- Table structure for table `introducere`
--

CREATE TABLE `introducere` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_produs` int(11) NOT NULL,
  `nr_aviz` int(11) NOT NULL,
  `denumire_produs` varchar(128) NOT NULL,
  `ART` varchar(128) DEFAULT NULL,
  `comentariu` varchar(128) DEFAULT NULL,
  `pret_euro` float DEFAULT NULL,
  `pret_ron` decimal(11,2) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `firma` varchar(500) DEFAULT NULL,
  `cif` varchar(500) DEFAULT NULL,
  `nr_inm_reg_com` varchar(500) DEFAULT NULL,
  `localitate` varchar(500) DEFAULT NULL,
  `strada` varchar(500) DEFAULT NULL,
  `nr` int(128) DEFAULT NULL,
  `judet` varchar(500) DEFAULT NULL,
  `nume_delegat` varchar(128) DEFAULT NULL,
  `serie_buletin` varchar(2) DEFAULT NULL,
  `nr_buletin` int(11) DEFAULT NULL,
  `eliberat_de` varchar(128) DEFAULT NULL,
  `cnp` int(20) DEFAULT NULL,
  `nr_mijloc_transport` varchar(128) DEFAULT NULL,
  `ora` int(2) DEFAULT NULL,
  `mentiuni1` varchar(128) DEFAULT NULL,
  `mentiuni2` varchar(128) DEFAULT NULL,
  `nr_factura` int(11) NOT NULL,
  `valoare` decimal(11,2) NOT NULL,
  `TVA` decimal(11,2) NOT NULL,
  `facturat_ron` decimal(11,2) NOT NULL,
  `termen_plata` int(11) NOT NULL,
  `scadenta` int(11) NOT NULL,
  `pret_ofertat` decimal(11,2) NOT NULL,
  `reducere_acordata` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `introducere`
--
ALTER TABLE `introducere`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `introducere`
--
ALTER TABLE `introducere`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
