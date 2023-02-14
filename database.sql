CREATE DATABASE `Deepdive` ; 
USE `Deepdive` ;
CREATE TABLE `users` (
    `userid` int(11) NOT NULL,
    `Name` varchar(45) DEFAULT NULL,
    `Wachtwoord` varchar(45) DEFAULT NULL,
    `Rechten` varchar(45) DEFAULT NULL
    PRIMARY KEY (`userid`)
);

INSERT INTO
    `users` (`userid`, `Name`, `Wachtwoord`, `Rechten`)
VALUES
    (1, 'Admin', 'Admin', 'Admin');
