-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2017 la 10:38
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
-- Structura de tabel pentru tabelul `comanda`
--

CREATE TABLE `comanda` (
  `id` int(11) NOT NULL,
  `denumire_produs` varchar(121) NOT NULL,
  `pretRON` float NOT NULL,
  `U_M` varchar(121) NOT NULL,
  `cantitate` int(11) DEFAULT NULL,
  `firma` varchar(121) NOT NULL,
  `delegat` varchar(121) NOT NULL,
  `mentiuni1` varchar(121) DEFAULT NULL,
  `mentiuni2` varchar(121) DEFAULT NULL,
  `cota_tva` float NOT NULL,
  `valoare` float NOT NULL,
  `tva` float NOT NULL,
  `facturatRON` float NOT NULL,
  `termen_plata` int(11) NOT NULL,
  `persoana_contact` varchar(11) NOT NULL,
  `pret_ofertat` float NOT NULL,
  `reducere` float DEFAULT NULL,
  `nr_comanda` int(11) NOT NULL,
  `termen_livrare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `comanda`
--

INSERT INTO `comanda` (`id`, `denumire_produs`, `pretRON`, `U_M`, `cantitate`, `firma`, `delegat`, `mentiuni1`, `mentiuni2`, `cota_tva`, `valoare`, `tva`, `facturatRON`, `termen_plata`, `persoana_contact`, `pret_ofertat`, `reducere`, `nr_comanda`, `termen_livrare`) VALUES
(1, 'Saibe grover M7', 2.5, 'buc', 16, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'dcfadsf', '', '', 19, 40, 8, 48, 30, 'dasda', 2.5, 0, 78, '0000-00-00'),
(2, 'Saibe grover M7', 2, 'buc', 16, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'dcfadsf', '', '', 19, 32, 6, 38, 30, 'sda', 2.5, -0.2, 90, '2016-03-12'),
(3, 'Ac imprimanta', 30, 'buc', 1, 'S.C. GDS MANUFACTURING SERVICES S.A.', 'dcfadsf', '', '', 19, 30, 6, 36, 30, 'asda', 30, 0, 0, '0000-00-00'),
(4, 'Ac imprimanta', 28.5, 'buc', 1, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'dcfadsf', '', '', 19, 28.5, 5, 33.5, 30, 'dfsdfs', 30, -0.05, 100, '2016-02-15'),
(5, 'Ax pinola', 450, 'buc', 4, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'dcfadsf', '', '', 19, 1800, 342, 2142, 30, 'fdsf', 450, 0, 2, '2017-05-30'),
(6, 'Ac imprimantadad', 80, 'buc', 32, 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'dcfadsf', '', '', 19, 2560, 486, 3046, 30, 'sdasdsa', 80, 0, 23, '2017-04-21');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `lista_delegati`
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
-- Salvarea datelor din tabel `lista_delegati`
--

INSERT INTO `lista_delegati` (`id`, `id_delegat`, `nume_delegat`, `serie_buletin`, `nr_buletin`, `eliberat_de`, `cnp`, `nr_mijloc_transport`, `ora`) VALUES
(1, 'cristi', 'Campean Cristian\r\n', 'AR', 356045, 'Arad', 2147483647, 'B-57-HFL', 10),
(2, 'Andrei', 'Andrei Campean', 'AR', 667933, 'Arad', 2147483647, 'B-59-HFL', 0),
(3, 'Ramona', 'Ramona F. Campean', 'AR', 321231, 'Arad', 23142134, 'B-59-HFL', 0),
(4, 'cristi', 'dcfadsf', 'ds', 524523, 'dsfsd', 432532, '5432d', 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `lista_firme`
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
-- Salvarea datelor din tabel `lista_firme`
--

INSERT INTO `lista_firme` (`id`, `id_firma`, `firma`, `cif`, `nr_inm_reg_com`, `localitate`, `strada`, `nr`, `judet`) VALUES
(1, 'coficab', 'S.C. COFICAB EASTERN EUROPE S.R.L.', 'RO16876750\r\n', 'J02 / 1625 / 2006', 'ARAD', 'ZONA IND. VEST\r\n', '3', 'ARAD'),
(2, 'hema', 'S.C. Advantage Hema Innovations S.R.L.\n', 'RO21599779\n', 'J02 / 817 / 2007\n', 'ARAD', 'ZONA IND. VEST', '10', 'Arad'),
(3, 'coindu', 'S.C. COINDU ROMANIA S.R.L.\n', 'RO16853918\n', 'J02/1760/2004\n', 'CURTICI', 'Zona libera Curtici\n', 'Parcela 8', 'ARAD'),
(4, 'gds', 'S.C. GDS MANUFACTURING SERVICES S.A.', 'RO16083118', 'J02 / 46 / 2009', 'ARAD', 'ZONA IND. VEST', '11-15', 'ARAD');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `oferte`
--

CREATE TABLE `oferte` (
  `id` int(11) NOT NULL,
  `denumire_produs` varchar(121) NOT NULL,
  `pretRON` float NOT NULL,
  `U_M` varchar(121) NOT NULL,
  `cantitate` int(11) DEFAULT NULL,
  `firma` varchar(121) NOT NULL,
  `delegat` varchar(121) NOT NULL,
  `mentiuni1` varchar(121) DEFAULT NULL,
  `mentiuni2` varchar(121) DEFAULT NULL,
  `cota_tva` float NOT NULL,
  `valoare` float NOT NULL,
  `tva` float NOT NULL,
  `facturatRON` float NOT NULL,
  `termen_plata` int(11) NOT NULL,
  `persoana_contact` varchar(11) NOT NULL,
  `pret_ofertat` float NOT NULL,
  `reducere` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `setari`
--

CREATE TABLE `setari` (
  `id` int(121) NOT NULL,
  `cota_tva` int(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `setari`
--

INSERT INTO `setari` (`id`, `cota_tva`) VALUES
(2, 19);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `uid`, `pwd`) VALUES
(1, 'omega', '1234'),
(2, 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oferte`
--
ALTER TABLE `oferte`
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
-- AUTO_INCREMENT for table `comanda`
--
ALTER TABLE `comanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lista_firme`
--
ALTER TABLE `lista_firme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `oferte`
--
ALTER TABLE `oferte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
