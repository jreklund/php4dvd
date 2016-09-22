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
  ADD `trailer` varchar(100) character set utf8 NOT NULL,
  ADD `subtitles` varchar(255) character set utf8 NOT NULL,
  ADD `audio` varchar(255) character set utf8 NOT NULL,
  ADD `video` varchar(255) character set utf8 NOT NULL;