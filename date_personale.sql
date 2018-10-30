-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: oct. 30, 2018 la 05:52 PM
-- Versiune server: 10.1.36-MariaDB
-- Versiune PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `date_personale`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `angajati`
--

CREATE TABLE `angajati` (
  `id` int(11) NOT NULL,
  `nume` varchar(15) DEFAULT NULL,
  `prenume` varchar(15) DEFAULT NULL,
  `telefon` varchar(18) DEFAULT NULL,
  `datan` date DEFAULT NULL,
  `email` text,
  `cnp` varchar(13) DEFAULT NULL,
  `varsta` tinyint(4) DEFAULT NULL,
  `casatorit` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `angajati`
--

INSERT INTO `angajati` (`id`, `nume`, `prenume`, `telefon`, `datan`, `email`, `cnp`, `varsta`, `casatorit`) VALUES
(1, 'Ion', 'Gheorghe', '0743370919', '1987-06-01', 'laurentiu.cerghedean@yahoo.com', '1870601324780', 31, 1),
(2, 'Iliu', 'Liliana', '0745566321', '1987-06-05', 'laurentiu.laurentiu@yahoo.com', '1870601333250', 29, 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `angajati`
--
ALTER TABLE `angajati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
