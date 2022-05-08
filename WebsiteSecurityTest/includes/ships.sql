-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jan 2021 om 10:49
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestevaer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ships`
--

CREATE TABLE `ships` (
  `nr` int(3) NOT NULL,
  `naam` varchar(23) NOT NULL,
  `bouwjaar` int(4) NOT NULL,
  `maxlading` int(23) NOT NULL,
  `maxbemanning` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ships`
--

INSERT INTO `ships` (`nr`, `naam`, `bouwjaar`, `maxlading`, `maxbemanning`) VALUES
(1, 'Apollo 13', 1970, 1000, 5),
(2, 'Kameleon', 1949, 1, 10),
(3, 'Black Pearl', 2003, 3500, 50),
(4, 'Titanic', 1912, 39000, 900),
(5, 'Millennium Falcon', 1999, 5000, 50);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`nr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
