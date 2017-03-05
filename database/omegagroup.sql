-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 09:02 
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
  `pret_euro` int(11) DEFAULT NULL,
  `pret_ron` int(11) NOT NULL,
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
  `valoare` int(11) NOT NULL,
  `TVA` int(11) NOT NULL,
  `facturat_ron` int(11) NOT NULL,
  `termen_plata` int(11) NOT NULL,
  `scadenta` int(11) NOT NULL,
  `pret_ofertat` int(11) NOT NULL,
  `reducere_acordata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lista_delegati`
--

CREATE TABLE `lista_delegati` (
  `id` int(11) NOT NULL,
  `nume_delegat` varchar(128) NOT NULL,
  `serie_buletin` varchar(2) NOT NULL,
  `nr_buletin` int(11) NOT NULL,
  `eliberat_de` varchar(128) NOT NULL,
  `cnp` int(20) NOT NULL,
  `nr_mijloc_transport` varchar(128) NOT NULL,
  `ora` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lista_delegati`
--

INSERT INTO `lista_delegati` (`id`, `nume_delegat`, `serie_buletin`, `nr_buletin`, `eliberat_de`, `cnp`, `nr_mijloc_transport`, `ora`) VALUES
(1, 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `pwd`) VALUES
(1, 'omega', '1234'),
(2, 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `introducere`
--
ALTER TABLE `introducere`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lista_firme`
--
ALTER TABLE `lista_firme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `introducere`
--
ALTER TABLE `introducere`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lista_firme`
--
ALTER TABLE `lista_firme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
