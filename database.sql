DROP DATABASE IF EXISTS `Deepdive`;

CREATE DATABASE `Deepdive`;

USE `Deepdive`;

CREATE TABLE `users` (
    `userid` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` varchar(45) DEFAULT NULL,
    `Wachtwoord` varchar(45) DEFAULT NULL,
    `Rechten` varchar(45) DEFAULT NULL PRIMARY KEY (`userid`)
);

INSERT INTO
    `users` (`Name`, `Wachtwoord`, `Rechten`)
VALUES
    ('Admin', 'Admin', 'Admin');

CREATE TABLE lidmaatschap(
    `userid` INT AUTO_INCREMENT PRIMARY KEY,
    `voornaam` varchar(45) DEFAULT NULL,
    `achternaam` varchar(45) DEFAULT NULL,
    `email` varchar(50) NOT NULL,
    `telefoon` int NOT NULL,
    `bericht` text
);

CREATE TABLE blog(
    `blogId` INT AUTO_INCREMENT PRIMARY KEY,
    `titel` varchar(60) DEFAULT NULL,
    `bericht` text DEFAULT NULL
)