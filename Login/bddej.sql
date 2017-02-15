CREATE DATABASE `userr`;
USE `userr`;
CREATE TABLE `user` (
 `id` INT(2) NOT NULL AUTO_INCREMENT ,
 `nombre` VARCHAR(30) NOT NULL ,
 `contrasena` VARCHAR(30) NOT NULL ,
PRIMARY KEY (`id`);