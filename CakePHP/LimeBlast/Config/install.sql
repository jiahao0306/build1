CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
	`password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
	`admin` tinyint(1) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY (`id`)
);
