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

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `imdbid` varchar(20) character set utf8 NOT NULL,
  `name` varchar(255) character set utf8 NOT NULL,
  `aka` varchar(255) character set utf8 NOT NULL,
  `year` smallint(4) unsigned NOT NULL,
  `duration` smallint(4) unsigned NOT NULL,
  `rating` double NOT NULL,
  `languages` varchar(255) character set utf8 NOT NULL,
  `country` varchar(255) character set utf8 NOT NULL,
  `genres` varchar(255) character set utf8 NOT NULL,
  `director` varchar(255) character set utf8 NOT NULL,
  `writer` varchar(255) character set utf8 NOT NULL,
  `producer` varchar(255) character set utf8 NOT NULL,
  `music` varchar(255) character set utf8 NOT NULL,
  `cast` text character set utf8 NOT NULL,
  `taglines` text character set utf8 NOT NULL,
  `plotoutline` text character set utf8 NOT NULL,
  `plots` text character set utf8 NOT NULL,
  `format` enum('DVD','Blu-ray') character set utf8 NOT NULL default 'DVD',
  `own` tinyint(1) NOT NULL default '1',
  `seen` tinyint(1) NOT NULL default '1',
  `notes` text character set utf8 NOT NULL,
  `loaned` tinyint(1) NOT NULL default '0',
  `loandate` date NOT NULL default '0000-00-00',
  `loanname` varchar(100) character set utf8 NOT NULL,
  `added` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`),
  KEY `imdbid` (`imdbid`),
  KEY `name` (`name`),
  KEY `aka` (`aka`),
  KEY `year` (`year`),
  KEY `rating` (`rating`),
  KEY `format` (`format`),
  KEY `own` (`own`),
  KEY `seen` (`seen`),
  KEY `loaned` (`loaned`),
  KEY `added` (`added`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `email` varchar(200) character set utf8 NOT NULL,
  `username` varchar(50) character set utf8 NOT NULL,
  `password` varchar(50) character set utf8 NOT NULL,
  `permission` tinyint(3) unsigned NOT NULL default '0',
  `lastlogin` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permission`, `lastlogin`) VALUES 
(1, 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '0000-00-00 00:00:00');