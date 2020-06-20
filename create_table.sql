create table if not exists `testtable`(
		`id` int auto_increment not null,
		`email` varchar(30) not null unique,
		`password` varchar(30) not null,
		PRIMARY KEY (`id`)
		) CHARACTER SET utf8 COLLATE utf8_general_ci;