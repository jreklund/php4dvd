-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `php4dvd`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `movies`
-- 

ALTER TABLE `movies` 
	DROP INDEX `name`,
	DROP INDEX `imdbid`,
	DROP INDEX `aka`,
	DROP INDEX `year`,
	DROP INDEX `rating`,
	DROP INDEX `format`,
	DROP INDEX `own`,
	DROP INDEX `seen`,
	DROP INDEX `added`,
	CHANGE `name` `name` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `aka` `aka` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `languages` `languages` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `country` `country` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `genres` `genres` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `director` `director` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `writer` `writer` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `producer` `producer` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `music` `music` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `trailer` `trailer` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	CHANGE `format` `format` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	ADD INDEX `format` (`format`),
	ADD INDEX `search` (`name`, `imdbid`, `year`, `rating`, `format`, `own`, `seen`, `loaned`, `added`);