DROP DATABASE IF EXISTS `Deepdive`;

CREATE DATABASE `Deepdive`;

USE `Deepdive`;

CREATE TABLE `users` (
    `userid` int(11) NOT NULL,
    `Name` varchar(45) DEFAULT NULL,
    `Wachtwoord` varchar(45) DEFAULT NULL,
    `Rechten` varchar(45) DEFAULT NULL PRIMARY KEY (`userid`)
);

INSERT INTO
    `users` (`userid`, `Name`, `Wachtwoord`, `Rechten`)
VALUES
    (1, 'Admin', 'Admin', 'Admin');

CREATE TABLE lidmaatschap(
    `userid` INT AUTO_INCREMENT PRIMARY KEY,
    `voornaam` varchar(45) DEFAULT NULL,
    `achternaam` varchar(45) DEFAULT NULL,
    `email` varchar(50) NOT NULL,
    `telefoon` int NOT NULL,
    `bericht` text
);