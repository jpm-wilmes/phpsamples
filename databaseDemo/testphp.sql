-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 dec 2022 om 13:03
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

--
-- gebruikersnaam testphp en wachtwoord testphp aanmaken voor deze database
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--
CREATE DATABASE IF NOT EXISTS `testphp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testphp`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `testphp`
--

CREATE TABLE `testphp` (
  `id` int(11) NOT NULL,
  `Naam` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `testphp`
--

INSERT INTO `testphp` (`id`, `Naam`) VALUES
(1, 'Jeroen'),
(2, 'Henk'),
(3, 'Jeroen'),
(4, 'Henk');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `testphp`
--
ALTER TABLE `testphp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `testphp`
--
ALTER TABLE `testphp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
