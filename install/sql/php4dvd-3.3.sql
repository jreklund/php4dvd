-- 
-- Database structure
-- 

ALTER DATABASE __DATABASE__ CHARACTER SET = __CHARACTER__ COLLATE = __COLLATE__;

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `selector` char(12) COLLATE __COLLATE__ NOT NULL,
  `token` char(128) COLLATE __COLLATE__ NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `selector` (`selector`)
) ENGINE=InnoDB DEFAULT CHARSET=__CHARACTER__ COLLATE=__COLLATE__;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imdbid` varchar(20) COLLATE __COLLATE__ NOT NULL,
  `name` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `aka` text COLLATE __COLLATE__ NOT NULL,
  `year` smallint(4) UNSIGNED NOT NULL,
  `duration` smallint(4) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `languages` text COLLATE __COLLATE__ NOT NULL,
  `country` text COLLATE __COLLATE__ NOT NULL,
  `genres` text COLLATE __COLLATE__ NOT NULL,
  `director` text COLLATE __COLLATE__ NOT NULL,
  `writer` text COLLATE __COLLATE__ NOT NULL,
  `producer` text COLLATE __COLLATE__ NOT NULL,
  `music` text COLLATE __COLLATE__ NOT NULL,
  `cast` text COLLATE __COLLATE__ NOT NULL,
  `taglines` text COLLATE __COLLATE__ NOT NULL,
  `plotoutline` text COLLATE __COLLATE__ NOT NULL,
  `plots` text COLLATE __COLLATE__ NOT NULL,
  `format` varchar(32) COLLATE __COLLATE__ NOT NULL,
  `own` tinyint(1) NOT NULL DEFAULT '1',
  `seen` tinyint(1) NOT NULL DEFAULT '1',
  `notes` text COLLATE __COLLATE__ NOT NULL,
  `loaned` tinyint(1) NOT NULL DEFAULT '0',
  `loandate` date NOT NULL DEFAULT '0000-00-00',
  `loanname` varchar(100) COLLATE __COLLATE__ NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trailer` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `subtitles` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `audio` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `video` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `tv` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `seasons` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `loaned` (`loaned`),
  KEY `format` (`format`)
) ENGINE=InnoDB DEFAULT CHARSET=__CHARACTER__ COLLATE=__COLLATE__;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE __COLLATE__ NOT NULL,
  `username` varchar(50) COLLATE __COLLATE__ NOT NULL,
  `password` varchar(255) COLLATE __COLLATE__ NOT NULL,
  `permission` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `lastlogin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=__CHARACTER__ COLLATE=__COLLATE__;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permission`, `lastlogin`) VALUES
(1, 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '0000-00-00 00:00:00');
