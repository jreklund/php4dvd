ALTER TABLE `movies` CHANGE `loandate` `loandate` DATE NULL DEFAULT NULL;
ALTER TABLE `users` CHANGE `lastlogin` `lastlogin` TIMESTAMP NULL DEFAULT NULL;
UPDATE `movies` SET `loandate` = NULL WHERE `loandate` = '0000-00-00';
UPDATE `users` SET `lastlogin` = NULL WHERE `lastlogin` = '0000-00-00 00:00:00';