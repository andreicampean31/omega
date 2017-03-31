-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 09:59 
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
  `valoare_TVA` int(11) DEFAULT NULL,
  `TVA` decimal(11,2) NOT NULL,
  `facturat_ron` decimal(11,2) NOT NULL,
  `termen_plata` int(11) NOT NULL,
  `scadenta` int(11) NOT NULL,
  `pret_ofertat` decimal(11,2) NOT NULL,
  `reducere_acordata` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introducere`
--

INSERT INTO `introducere` (`id`, `cod_produs`, `nr_aviz`, `denumire_produs`, `ART`, `comentariu`, `pret_euro`, `pret_ron`, `cantitate`, `firma`, `cif`, `nr_inm_reg_com`, `localitate`, `strada`, `nr`, `judet`, `nume_delegat`, `serie_buletin`, `nr_buletin`, `eliberat_de`, `cnp`, `nr_mijloc_transport`, `ora`, `mentiuni1`, `mentiuni2`, `nr_factura`, `valoare`, `valoare_TVA`, `TVA`, `facturat_ron`, `termen_plata`, `scadenta`, `pret_ofertat`, `reducere_acordata`) VALUES
(20, 1, 1, 'Rectificat matrita', '', '', NULL, '410.00', 1, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', 3, 'ARAD', 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10, '', '', 1, '410.00', NULL, '77.90', '487.90', 30, 0, '410.00', 0.00),
(32, 61, 41, 'Adaptor desen 9BXXJB-006-000', '', '', NULL, '35.00', 28, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', 3, 'ARAD', 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10, '', '', 39, '980.00', NULL, '186.20', '1166.20', 30, 0, '35.00', 0.00),
(33, 0, 0, '', '', '', NULL, '0.00', 0, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', 3, 'ARAD', 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10, '', '', 0, '0.00', NULL, '0.00', '0.00', 0, 0, '0.00', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `lista_delegati`
--

CREATE TABLE `lista_delegati` (
  `id` int(11) NOT NULL,
  `id_delegat` varchar(128) DEFAULT NULL,
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

INSERT INTO `lista_delegati` (`id`, `id_delegat`, `nume_delegat`, `serie_buletin`, `nr_buletin`, `eliberat_de`, `cnp`, `nr_mijloc_transport`, `ora`) VALUES
(1, 'cristi', 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10),
(2, 'Andrei', 'Andrei Campean', 'AR', 667933, 'Arad', 2147483647, 'B-59-HFL', 0),
(3, 'Ramona', 'Ramona F. Campean', 'AR', 321231, 'Arad', 23142134, 'B-59-HFL', 0),
(4, 'iulia', 'Iulia Campean', 'AR', 4213412, 'ARAD', 2147483647, 'B-57-HFL', 0),
(5, 'dfasd', 'dsfasdf', 'as', 0, 'dsfasdf', 2314213, 'fasdfas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lista_firme`
--

CREATE TABLE `lista_firme` (
  `id` int(11) NOT NULL,
  `id_firma` varchar(128) DEFAULT NULL,
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

INSERT INTO `lista_firme` (`id`, `id_firma`, `firma`, `cif`, `nr_inm_reg_com`, `localitate`, `strada`, `nr`, `judet`) VALUES
(1, 'coficab', 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', '3', 'ARAD'),
(2, 'hema', 'S.C. Advantage Hema Innovations S.R.L.\n', 'RO21599779\n', 'J02 / 817 / 2007\n', 'ARAD', 'ZONA IND. VEST', '10', 'Arad'),
(3, 'coindu', 'S.C. COINDU ROMANIA S.R.L.\n', 'RO16853918\n', 'J02/1760/2004\n', 'CURTICI', 'Zona libera Curtici\n', 'Parcela 8', 'ARAD'),
(4, 'gds', 'S.C. GDS MANUFACTURING SERVICES S.A.', 'RO16083118', 'J02 / 46 / 2009', 'ARAD', 'ZONA IND. VEST', '11-15', 'ARAD'),
(5, 'asd', 'adas', 'dsada', 'da', 'das', 'dasd', 'asdas', 'dads'),
(6, '', '', '', '', '', '', '', ''),
(7, 'vdfvsdfv', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setari`
--

CREATE TABLE `setari` (
  `id` int(121) NOT NULL,
  `cota_tva` int(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setari`
--

INSERT INTO `setari` (`id`, `cota_tva`) VALUES
(2, 19);

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
-- Indexes for table `setari`
--
ALTER TABLE `setari`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lista_firme`
--
ALTER TABLE `lista_firme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `setari`
--
ALTER TABLE `setari`
  MODIFY `id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
