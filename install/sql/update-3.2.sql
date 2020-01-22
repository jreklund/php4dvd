-- 
-- Table structure for table `movies`
--

ALTER TABLE `movies`
  ADD `tv` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  ADD `seasons` TINYINT(2) UNSIGNED NOT NULL DEFAULT '0';

--
-- Table structure for table `auth`
--

ALTER TABLE `auth`
  CHANGE `selector` `selector` CHAR(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  CHANGE `token` `token` CHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
