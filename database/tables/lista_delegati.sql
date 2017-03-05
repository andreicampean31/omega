-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 08:59 
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_delegati`
--
ALTER TABLE `lista_delegati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
