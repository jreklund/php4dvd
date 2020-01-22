ALTER TABLE `movies` ADD `nameorder` VARCHAR(255) CHARACTER SET __CHARACTER__ COLLATE __COLLATE__ NOT NULL AFTER `name`;
UPDATE `movies` SET `nameorder` = CASE WHEN `name` REGEXP '^(__NAME_ORDER__)[[:space:]]' = 1 THEN TRIM(SUBSTR(`name` , INSTR(`name` ,' '))) ELSE `name` END
