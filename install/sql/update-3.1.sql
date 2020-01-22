-- 
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`selector` CHAR(12) NOT NULL,
	`token` CHAR(128) NOT NULL,
	`userid` INT(10) UNSIGNED NOT NULL,
	`expires` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);
