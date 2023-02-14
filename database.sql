-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 feb 2023 om 12:08
-- Serverversie: 10.4.25-MariaDB
-- PHP-versie: 8.1.10
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `deepdive`
--
-- --------------------------------------------------------
--
-- Tabelstructuur voor tabel `users`
--
CREATE TABLE `users` (
    `userid` int(11) NOT NULL,
    `Name` varchar(45) DEFAULT NULL,
    `Wachtwoord` varchar(45) DEFAULT NULL,
    `Rechten` varchar(45) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--
INSERT INTO
    `users` (`userid`, `Name`, `Wachtwoord`, `Rechten`)
VALUES
    (1, 'Admin', 'Admin', 'Admin');

--
-- Indexen voor geëxporteerde tabellen
--
--
-- Indexen voor tabel `users`
--
ALTER TABLE
    `users`
ADD
    PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE
    `users`
MODIFY
    `userid` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;