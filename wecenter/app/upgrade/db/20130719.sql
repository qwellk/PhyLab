ALTER TABLE `[#DB_PREFIX#]question` ADD `is_recommend` TINYINT( 1 ) NULL DEFAULT '0', ADD INDEX ( `is_recommend` );